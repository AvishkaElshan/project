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

// chart =========================================================



// SQL query to fetch data from chart table
$sql = "SELECT year, c1, c2, c3, c4, c5, c6, c7, c8 FROM chart WHERE emp_id = 1212";
$result = $conn->query($sql);

// Initialize an array to hold the data
$data = array();

// Add column headers
$data[] = ['Year', 'customise', 'standard', 'Europ Customise', 'Europ Standard', 'Middle East Customise', 'Middle East Standard', 'Asian Customise', 'Asian Standard'];

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Loop through each row in the result set
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            $row['year'],
            (int)$row['c1'],
            (int)$row['c2'],
            (int)$row['c3'],
            (int)$row['c4'],
            (int)$row['c5'],
            (int)$row['c6'],
            (int)$row['c7'],
            (int)$row['c8']
        ];
    }
}



// Encode the data as JSON
$jsonData = json_encode($data);


// chart-----------------------------
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
        // PHP JSON-encoded data
        var jsonData = <?php echo $jsonData; ?>;
        
        // Convert JSON data to DataTable format
        var data = google.visualization.arrayToDataTable(jsonData);

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
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