<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   


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
         <h3 class="name">BOI</h3>
         <p class="role">Investment Board</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
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
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="index.php"><i></i><span>Silueta</span></a>
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
<section class="form-container">

   <form action="registerform.php" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <p>your name <span>*</span></p>
      <input type="text" name="name" placeholder="enter your name"class="box">
      <p>your employee ID <span>*</span></p>
      <input type="text" name="id" placeholder="enter your employee ID"class="box">
      <p>Company Name <span>*</span></p>
      <input type="text" name="company_name" placeholder="enter your company Name"class="box">
      <p>your password<span>*</span></p>
      <input type="password" name="pass" placeholder="enter your password"class="box">
      
      
      
      <input type="submit" value="register new" name="submit" class="btn">
      

      
   </form>
   
</section>















<footer class="footer">

   &copy;  Investment Board | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>