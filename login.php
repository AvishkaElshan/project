<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

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
         
         
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/PP.jpeg" class="image" alt="">
         <h3 class="name">BOI</h3>
         <p class="role">Investment Board</p>
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
      <img src="images/PP.jpeg" class="image" alt="">
      <h3 class="name">BOI</h3>
      <p class="role">Investment Board</p>
   </div>
</div>

<section class="form-container">

   <form action="loginform.php" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      
      <p>your employee ID <span>*</span></p>
      <input type="text" name="id" placeholder="enter your employee ID" class="box">
      
      <p>your password <span>*</span></p>
      <input type="password" name="password" placeholder="enter your password" class="box"> 

      
    

      <input type="submit" value="login new" name="submit" class="btn">
      <p><a href="forgot_password.php">Forgot Password?</a></p>
      
   </form>

</section>















<footer class="footer">

   &copy;  Investment Board | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>