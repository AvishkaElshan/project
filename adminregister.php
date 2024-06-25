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
         <img src="images/PP.jpeg" class="image" alt="">
         <h3 class="name">BOI</h3>
         <p class="role">Investment Board</p>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            
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

   <form action="adminreg.php" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php if (!empty($error)) { 
         echo $error;
     } ?>
      <p>your name <span>*</span></p>
      <input type="text" name="name" placeholder="enter your name"class="box">
      <p>your employee ID <span>*</span></p>
      <input type="text" name="id" placeholder="enter your employee ID"class="box">
      <label for="company_name" style="font-size: 15px;">Enter your Company:</label>

         <select name="company_name" id="Company_name" class="box">
            <option value="mas">MAS</option>
            <option value="silueta">Silueta</option>
            <option value="brandix">Brandix</option>
            <option value="noyonlanka">Noyonlanka</option>
            <option value="unichela">Unichela</option>
            <option value="rainwear">Rainwear</option>
            <option value="northsail">Northsails</option>
            <option value="oceanlanka">Oceanlanka</option>
            <option value="lineaintimo">Linea Intimo</option>
            <option value="stretchline">Stretchline</option>
         </select>
      <p>your password<span>*</span></p>
      <input type="password" name="pass" placeholder="enter your password"class="box">
      
      <p>What is your favourite color<span>*</span></p>
      <input type="text" name="color" placeholder="Enter your favourite color" class="box">

      <p>What is your pets Name<span>*</span></p>
      <input type="text" name="petname" placeholder="Enter your pets name" class="box">
      
     
      
      
      
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