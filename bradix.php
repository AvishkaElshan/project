<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Brandix</title>

   <!-- Favicon -->
   <link rel="icon" type="image/x-icon" href="images/brandix1.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      * {
        box-sizing: border-box;
      }
      
      
      
      #myVideo {
        position:static;
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
      }
      
      .content {
        position: fixed;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
      }
      
      
      </style>

      <!-- chart scrip from here -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['all', 'Waste Recycled and Reused'],
      ['reused',     16],
      ['Recycled',     6],
      ['wastes',     2]
    ]);

    var options = {
      title: 'Waste Recycled and Reused',
      pieHole: 0.4,
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  }
</script>

<!-- to here -->
</head>
<body">

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
            
            <img src="images/brandix1.png" alt="brandix_image1">
            
            <h1 style="text-align:justify">As a leading apparel solutions provider in Sri Lanka, we have been providing Inspired Solutions to renowned brands across
                the world for over 50 years. Our vertically integrated supply chain, expanding global network of manufacturing and operating locations, an inspired employee
                 base and infrastructure have helped us deliver millions of garments to our customers. Combining this with our expertise in product innovation, research and development,
                unparalleled speed in delivery and an unwavering commitment to delivering a phenomenal product has helped ingrain Brandix as a leader in the Apparel arena.</h1>
         </div>
   </div>
   <div class="box-container">
      <div class="box">

         <video autoplay muted loop id="myVideo">
            <source src="videos/Brandix-Landing-Page-Video-Web-Optimized.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
      </div>
   </div>
   <div class="box-container">
      <div class="box">
         <h1 style="text-align: left; color: brown; font-size: 50px;">Driven to Inspire</h1>

   
   <p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;">
   In a world characterized by constant change and evolution, Brandix finds inspiration in the extraordinary properties of mercury. Mercury’s fluidity, propensity for change, and historical associations with speed and agility deeply resonate with the Brandix journey as a leader in the South Asian apparel industry.
   
   <br><br>Guided by empathy, care, and excellence, Brandix has responsibly transformed acquisitions and pursued the unknown with unwavering success.</p>
         
      </div>
   </div>

   <div class="box-container">
      <div class="box">
         <div id="donutchart" style="width: 900px; height: 500px;"></div>
         
            <p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;">In 2023, Brandix made significant strides in its sustainability initiatives, exemplifying its commitment to environmental responsibility and waste management. The company successfully recycled 25% of its waste, reflecting a robust effort to divert substantial amounts of materials from landfills and repurpose them for new uses. This recycling rate underscores Brandix's dedication to fostering a circular economy, where waste is minimized, and resources are reused.</p>

            <br> <br>
            <p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;">Moreover, Brandix achieved an impressive reuse rate of 66.7%, indicating that a significant portion of its waste materials were given a second life. This high reuse percentage highlights the company's innovative strategies and effective waste management practices, which focus on maximizing the utility of materials and reducing the need for virgin resources. By finding new applications for waste products, Brandix not only conserves natural resources but also reduces its environmental footprint.</p>
            
            <br><br>
            <p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;">Despite these achievements, the company faced challenges, with 8.3% of its waste categorized as wasted. This figure represents the portion of waste that could not be recycled or reused and thus was disposed of. While this indicates room for improvement, it also provides a clear benchmark for future sustainability goals and initiatives.</p>
            
            <br><br>
            <p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;">Overall, Brandix's accomplishments in 2023 reflect a proactive and forward-thinking approach to waste management. The significant percentages of recycled and reused materials demonstrate the company's commitment to sustainability and its ongoing efforts to reduce environmental impact. These achievements set a strong foundation for future initiatives aimed at further improving waste management and enhancing environmental stewardship.</p>
       </div>
      
   </div>
</section>



<section class="contact">

   

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <a href="tel: 076 3603601">076 3603601</a>
         <a href="tel:0112451760">0112451760</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <a href="brandix@gmail.come">brandix@gmail.come</a>
         <a href="brandiacom@gmail.come">brandiacom@gmail.come</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>office address</h3>
         <a href="#">LOt 20 Biyagama EPZ </a>
      </div>

   </div>
   
</section>














<footer class="footer">

   &copy;  Investment Board | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>