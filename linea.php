<?php

require_once "db_connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Linea Intimo</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      .card {
          margin-bottom: 20px;
      }
      .card img {
          max-height: 200px;
          object-fit: cover;
      }
     
    .mb-4 {
            margin-bottom: 20px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .col-md-4 {
            flex: 0 0 calc(33.3333% - 20px);
            max-width: calc(33.3333% - 20px);
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative; /* Required for absolute positioning of full-size image */
        }
        .card {
            overflow: hidden;
            border: none;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            position: relative;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.1); /* Scale up on hover */
        }
        .card-img-top {
            width: 100%;
            height: auto;
            border-radius: 8px 8px 0 0;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover .card-img-top {
            transform: scale(1.2); /* Scale up on hover */
        }
        .card-body {
            padding: 15px;
        }
        .card-text {
            font-size: 14px;
            line-height: 1.5;
            
        }
        /* Full size image overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            transition: opacity 0.3s ease-in-out;
        }
        .overlay.active {
            display: flex;
        }
        .overlay-content {
            max-width: 80%;
            max-height: 80%;
            overflow: hidden;
            position: relative;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        .overlay-content img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .overlay-content p {
            margin-top: 10px;
            font-size: 16px;
            line-height: 1.6;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: #fff;
            font-size: 24px;
        }
    
  </style>

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="index.php" class="logo">Home</a>

      

      <div class="icons">
         
         
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/OIP.jpeg" class="image" alt="">
         <h3 class="name">BOI</h3>
         <p class="role">Investment Board</p>
         <a href="admin.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="adminregister.php" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/OIP.jpeg" class="image" alt="">
      <h3 class="name">BOI</h3>
      <p class="role">Investment Board</p>
      <a href="admin.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="silueta.html"><i></i><span>Silueta</span></a>
      <a href="Rainwear.html"><i></i><span>Rainwear</span></a>
      <a href="Stretchline.html"><i></i><span>Stretchline</span></a>
      <a href="MAS.html"><i></i><span>MAS Kreeda</span></a>
      <a href="Ocianlanka.html"><i></i><span>Ocianlanka</span></a>
      <a href="Noyonlanka.html"><i></i><span>Noyonlanka</span></a>
      <a href="unichela.html"><i></i><span>Unichela</span></a>
      <a href="linea.html"><i></i><span>Linea Intimo</span></a>
      <a href="northsails.html"><i></i><span>Northsails</span></a>
      <a href="bradix.html"><i></i><span>Brandix</span></a>
   </nav>


</div>

<section class="contact">
   
   <div class="box-container">
      <div class="box">
         <img src="images/linea1.jpeg" alt="">
         <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore at obcaecati quo. Ratione error dignissimos officiis obcaecati rem, accusantium ex placeat incidunt, provident architecto iste, maiores minus expedita consectetur veniam fugiat libero dolorem nam qui dolores iusto odit. Inventore ipsum sequi quam vitae adipisci porro molestias minima officia illum deleniti?</p>
      

      </div>
      <div class="box">
         <img src="images/linea1.jpeg" alt="">
         <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore at obcaecati quo. Ratione error dignissimos officiis obcaecati rem, accusantium ex placeat incidunt, provident architecto iste, maiores minus expedita consectetur veniam fugiat libero dolorem nam qui dolores iusto odit. Inventore ipsum sequi quam vitae adipisci porro molestias minima officia illum deleniti?</p>
      

      </div>
      <div class="box">
         <img src="images/linea1.jpeg" alt="">
         <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore at obcaecati quo. Ratione error dignissimos officiis obcaecati rem, accusantium ex placeat incidunt, provident architecto iste, maiores minus expedita consectetur veniam fugiat libero dolorem nam qui dolores iusto odit. Inventore ipsum sequi quam vitae adipisci porro molestias minima officia illum deleniti?</p>
      

      </div>
   </div>


</section>


<div class="container">
    <h1 class="mb-4">Advertisements:</h1>
    <div class="row">
        <?php
        require_once "db_connect.php";
        // Retrieve images and descriptions from database
        $sql = "SELECT img1, desc1, img2, desc2, img3, desc3 FROM addpic_table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // First Image and Description
                if (!empty($row["img1"])) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $row["img1"] . '" class="card-img-top" alt="Image 1">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">' . htmlspecialchars($row["desc1"]) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                
                // Second Image and Description
                if (!empty($row["img2"])) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $row["img2"] . '" class="card-img-top" alt="Image 2">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">' . htmlspecialchars($row["desc2"]) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                
                // Third Image and Description
                if (!empty($row["img3"])) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $row["img3"] . '" class="card-img-top" alt="Image 3">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">' . htmlspecialchars($row["desc3"]) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        } else {
            echo "<p>No images found.</p>";
        }

        $conn->close();
        ?>
    </div>
</div>

<section class="contact">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <a href="tel:1234567890">+94-11-222-444</a>
         <a href="tel:1112223333">+94-11-222-456</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <a href="mailto:linea@gmail.com">linea@gmail.com</a>
         <a href="mailto:lineaintimo@gmail.com">lineaintimo@gmail.com</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>office address</h3>
         <a href="#">flat no. 1, a-1 building, jogeshwari, mumbai, india - 400104</a>
      </div>

   </div>

</section>




<footer class="footer">

   &copy;  Investment Board | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>