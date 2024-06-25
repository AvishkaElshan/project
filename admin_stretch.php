<?php
session_start();
require_once "db_connect.php"; // Ensure this file has proper database connection setup

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'admin') {
    header("Location: login.php");
    exit();
}

$emp_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT name, company_name FROM users WHERE emp_id = ?");
if ($stmt) {
    $stmt->bind_param("s", $emp_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();
        $name = $admin['name'];
        $company_name = $admin['company_name'];
    } else {
        $name = "Unknown";
        $company_name = "Unknown";
    }
    $stmt->close();
} else {
    $name = "Error";
    $company_name = "Error";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- chart from here  -->
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'cutomise', 'standard', 'Europ Customise', 'Europ Standard', 'Middle East Customise', 'Middle East Standard', 'Asian Customise', 'Asian Standard'],
          ['2010', 800, 2200, 150, 1300, 200, 600, 450, 300],
          ['2011', 700, 1850, 120, 950, 170, 700, 410, 200],
          ['2012', 440, 1900, 50, 1000, 100, 600, 250, 300],
          ['2013', 660, 2400, 90, 1400, 100, 650, 470, 350],
          ['2014', 720, 2450, 100, 1100, 100, 800, 520, 550],
          ['2015', 850, 2220, 110, 1250, 180, 670, 560, 300],
          ['2016', 770, 1850, 90, 950, 180, 650, 500, 250],
          ['2017', 800, 1950, 120, 1000, 220, 700, 460, 250],
          ['2018', 760, 1600, 150, 1050, 150, 400, 460, 150],
          ['2019', 550, 1750, 100, 900, 120, 500, 330, 350],
          ['2020', 2240, 1200, 500, 550, 600, 400, 1140, 250],
          ['2021', 1890, 1000, 450, 400, 590, 300, 850, 300],
          ['2022', 2450, 990, 600, 350, 550, 220, 1300, 420],
          ['2023', 2800, 900, 800, 400, 1000, 200, 1000, 300],
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <!-- to here -->
</head>
<body>

<header class="header">
   <section class="flex">
      <a href="index.php" class="logo">Home</a>
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>
      <div class="profile">
         <img src="images/OIP.jpeg" class="image" alt="">
         <h3 class="name"><?php echo htmlspecialchars($name); ?></h3>
         <p class="role"><?php echo htmlspecialchars($company_name); ?></p>
         <a href="admin.php" class="btn">View Profile</a>
         <div class="flex-btn">
            <a href="logout.php" class="option-btn">Logout</a>
         </div>
      </div>
   </section>
</header>   

<div class="side-bar" style="background-color:paleturquoise ;">
   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>
   <div class="profile">
      <img src="images/OIP.jpeg" class="image" alt="">
      <h3 class="name"><?php echo htmlspecialchars($name); ?></h3>
      <p class="role"><?php echo htmlspecialchars($company_name); ?></p>
      
   </div>
   
</div>

<section class="user-profile">
   <h1 class="heading">Your Profile</h1>
   <div class="info">
      <div class="user">
         <img src="images/OIP.jpeg" alt="">
         <h3><?php echo htmlspecialchars($name); ?></h3>
         <p><?php echo htmlspecialchars($company_name); ?></p>
         <a href="update.html" class="inline-btn">Update Profile</a>
      </div>
      <div class="box-container">
         
         <div class="box">
            <div class="flex">
            <div id="barchart_material" style="width: 900px; height: 1500px;"></div> <!--chart -->
  
            </div>
         </div>
         
        
      </div>
   </div>
</section>

<footer class="footer">
   &copy; Investment Board | All rights reserved!
</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>