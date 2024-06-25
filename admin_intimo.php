<?php


@include 'db_connect.php'; // Ensure this file has proper database connection setup
session_start();
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
      <section class="form-container" style="width: 100%;">
        <form action="add_form.php" method="post" enctype="multipart/form-data">
          <h2>Upload new add:</h2> <br>
            <p>Enter Your Employee ID: <span>*</span></p>
            <input type="text" name="emp_id" placeholder="enter your employee ID" class="box">
          <!-- First Image and Description -->
          <p>Upload 1st Image <span>*</span></p>
          <input type="file" name="img1" placeholder="Upload 1st image" class="box" style="margin-bottom: 10px;">

          <p>Description 1 <span>*</span></p>
          <textarea name="text1" id="text1" style="background-color: #c6cfc8; height: 100px; width: 460px; margin-bottom: 20px;resize:none;"></textarea>

          <!-- Second Image and Description -->
          <p>Upload 2nd Image <span>*</span></p>
          <input type="file" name="img2" placeholder="Upload 2nd image" class="box" style="margin-bottom: 10px;">

          <p>Description 2 <span>*</span></p>
          <textarea name="text2" id="text2" style="background-color: #c6cfc8; height: 100px; width: 460px; margin-bottom: 20px;resize:none;"></textarea>

          <!-- Third Image and Description -->
          <p>Upload 3rd Image <span>*</span></p>
          <input type="file" name="img3" placeholder="Upload 3rd image" class="box" style="margin-bottom: 10px;">

          <p>Description 3 <span>*</span></p>
          <textarea name="text3" id="text3" style="background-color: #c6cfc8; height: 100px; width: 460px; margin-bottom: 20px;resize:none;"></textarea>

          <input type="submit" value="Submit" name="submit" class="btn" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">
        </form>
      </section>
    </div>
  </div>
</div>


<?php
        if (isset($_SESSION['message'])): ?>

            <div style="display:flex; top:30px;font-size:15px" class="alert alert-<?= $_SESSION['msg_type'] ?> fade show" role="alert">

                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['msg_type']);

                ?>


                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

<table id="tbl" class="table table-hover dt-responsive" style="width: 100%;">
    <thead class="thead-dark">
        <tr style="font-size: 25px;">
            <th>Image ID</th>
            <th>Description</th>
            <th>Register Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Establish database connection (assuming $conn is already defined in db_connect.php)
        require_once "db_connect.php";

        // SQL query to fetch data from addpic_table
        $sql = "SELECT * FROM addpic_table";
        $result = $conn->query($sql);

        // Check if there are rows returned
        if ($result->num_rows > 0) {
            // Loop through each row in the result set
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td class="arimo-1" style="font-size:20px;font-weight:bold">
                        <?php echo $row['id']; ?>
                    </td>
                    
                        <td class='img-container'><?php echo "<img src='".$row["img1"]."' alt='Image' style='height:200px;width:200px'>" ?></td>
                   
                    <td class="arimo-1" style="font-size:20px;font-weight:bold">
                        <?php echo $row['reg_date']; ?>
                    </td>
                    <td>
                        <!-- Delete link with ID passed as parameter -->
                        <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-xl" style="display: inline !important;font-size:20px">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        // Close database connection
       
        ?>
    </tbody>
</table>
<!-- chart  -->
<div class="box-container">
  <div class="box">
    <div class="flex">
      <section class="form-container" style="width: 100%;">
        <form action="editC.php" method="post" enctype="multipart/form-data">
          <h2>Edit chart</h2> <br>
            <p>Enter Your Employee ID: <span>*</span></p>
            <input type="text" name="emp_id" placeholder="enter your employee ID" class="box" style="height:20px">
         
          <p>Enter th Year<span>*</span></p>
          <input type="text" name="year" placeholder="enter year" class="box" style="height:20px">

          <p>Enter th column 1 Value<span>*</span></p>
          <input type="text" name="c1" placeholder="enter Value" class="box" style="height:20px">

          <p>Enter th column 2 Value<span>*</span></p>
          <input type="text" name="c2" placeholder="enter Value" class="box" style="height:20px">

          <p>Enter th column 3 Value<span>*</span></p>
          <input type="text" name="c3" placeholder="enter Value" class="box" style="height:20px">

          <p>Enter th column 4 Value<span>*</span></p>
          <input type="text" name="c4" placeholder="enter Value" class="box" style="height:20px">

          <p>Enter th column 5 Value<span>*</span></p>
          <input type="text" name="c5" placeholder="enter Value" class="box" style="height:20px">

          <p>Enter th column 6 Value<span>*</span></p>
          <input type="text" name="c6" placeholder="enter Value" class="box" style="height:20px">

          <p>Enter th column 7 Value<span>*</span></p>
          <input type="text" name="c7" placeholder="enter Value" class="box" style="height:20px">

          <p>Enter th column 8 Value<span>*</span></p>
          <input type="text" name="c8" placeholder="enter Value" class="box" style="height:20px">

          <input type="submit" value="Submit" name="editC" class="btn" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">
        </form>
      </section>
    </div>
  </div>
</div>

<?php
        if (isset($_SESSION['message'])): ?>

            <div style="display:flex; top:30px;font-size:15px" class="alert alert-<?= $_SESSION['msg_type'] ?> fade show" role="alert">

                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['msg_type']);

                ?>


                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

<table id="tbl" class="table table-hover dt-responsive" style="width: 100%;">
    <thead class="thead-dark">
        <tr style="font-size: 15px;">
            <th>Emp_ID</th>
            <th>Year</th>
            <th>column1</th>
            <th>column2</th>
            <th>column3</th>
            <th>column4</th>
            <th>column5</th>
            <th>column6</th>
            <th>column7</th>
            <th>column8</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Establish database connection (assuming $conn is already defined in db_connect.php)
        require_once "db_connect.php";

        // SQL query to fetch data from addpic_table
        $sql = "SELECT * FROM chart";
        $result = $conn->query($sql);

        // Check if there are rows returned
        if ($result->num_rows > 0) {
            // Loop through each row in the result set
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td class="arimo-1" style="font-size:20px;font-weight:bold">
                        <?php echo $row['id']; ?>
                    </td>
                    
                    <td class="arimo-1" style="font-size:10px;font-weight:bold">
                        <?php echo $row['year']; ?>
                    </td>
                    <td class="arimo-1" style="font-size:10px;font-weight:bold">
                        <?php echo $row['c1']; ?>
                    </td>
                    <td class="arimo-1" style="font-size:10px;font-weight:bold">
                        <?php echo $row['c2']; ?>
                    </td>
                    <td class="arimo-1" style="font-size:10px;font-weight:bold">
                        <?php echo $row['c3']; ?>
                    </td>
                    <td class="arimo-1" style="font-size:10px;font-weight:bold">
                        <?php echo $row['c4']; ?>
                    </td>
                    <td class="arimo-1" style="font-size:10px;font-weight:bold">
                        <?php echo $row['c5']; ?>
                    </td>
                    <td class="arimo-1" style="font-size:10px;font-weight:bold">
                        <?php echo $row['c6']; ?>
                    </td>
                    <td class="arimo-1" style="font-size:10px;font-weight:bold">
                        <?php echo $row['c7']; ?>
                    </td>
                    <td class="arimo-1" style="font-size:10px;font-weight:bold">
                        <?php echo $row['c8']; ?>
                    </td>
                    <td>
                        <!-- Delete link with ID passed as parameter -->
                        <a href="process.php?deletec=<?php echo $row['id']; ?>" class="btn btn-danger btn-xl" style="display: inline !important;font-size:20px">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        // Close database connection
       
        ?>
    </tbody>
</table>

<!-- chart -->
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