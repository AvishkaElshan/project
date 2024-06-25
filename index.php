<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- Favicon -->
   <link rel="icon" type="image/x-icon" href="images/OIP.jpeg">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script>
    google.charts.load('current', {
        'packages': ['geochart']
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
          ['Country', 'Objects'],
          ['Italy', 6],
          ['United States', 11],
          ['Sri lanka', 11],
          ['India', 11],
          ['united kingdom', 11],
          ['brazil', 10],
          ['canada', 11],
          ['australia', 11],
          ['finland', 11],
          ['pakistan', 11],
          ['russia', 9],
          ['china', 11],
          
          
         

        ]);

        var options = {
        colorAxis: {colors: ['#ffffff','#fc7272']},
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
      (async () => {

const topology = await fetch(
    'https://code.highcharts.com/mapdata/countries/lk/lk-all.topo.json'
).then(response => response.json());

// Prepare demo data. The data is joined to map using value of 'hc-key'
// property by default. See API docs for 'joinBy' for more info on linking
// data and map.
const data = [
    ['lk-bc', 1], ['lk-mb',1], ['lk-ja', 1], ['lk-kl', 3],
    ['lk-ky', 1], ['lk-mt', 1], ['lk-nw', 3], ['lk-ap', 1],
    ['lk-pr', 1], ['lk-tc', 1], ['lk-ad', 1], ['lk-va', 3],
    ['lk-mp', 3], ['lk-kg', 3], ['lk-px', 1], ['lk-rn', 1],
    ['lk-gl', 3], ['lk-hb',1], ['lk-mh', 3], ['lk-bd', 1],
    ['lk-mj', 1], ['lk-ke', 1], ['lk-co', 3], ['lk-gq', 3],
    ['lk-kt', 1]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: topology
    },

    title: {
        text: 'Our Zone locations:'
    },

    subtitle: {
        text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/lk/lk-all.topo.json">Sri Lanka</a>'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Random data',
        states: {
            hover: {
                color: '#d44d44'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});

})();
</script>
<style>
   #container {
    height: 700px;
    min-width: 500px;
    max-width: 900px;
    margin: 0 auto;
}

.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}
ul {
  columns: 3;
  -webkit-columns: 3;
  -moz-columns: 3;
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
         <h1 style="text-align: justify; color:brown; font-size: 20px;">Who are we:</h1>

         <p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;">The Board of Investment (BOI) of Sri Lanka is the premier government agency responsible for promoting and facilitating foreign direct investment (FDI) in the country. Established under the BOI Law No. 4 of 1978, the BOI operates as a central hub for investors, offering a range of incentives and services aimed at fostering a conducive investment climate. Its overarching goal is to drive economic growth by attracting and retaining high-value investments across various sectors. The BOI's operations are organized into several key areas: investment promotion, investment facilitation, infrastructure development, and policy advocacy. This structure allows the BOI to effectively manage and streamline the investment process, ensuring that investors receive comprehensive support from the initial inquiry stage through to project implementation and beyond.
      </p></div>
      
      

   </div>


</section>
<section class="contact">

<div class="box-container">

      <div class="box">
         <h1 style="font-size: 20px; color:#596145;text-transform: uppercase; ">We export our products to: </h1>
         <div id="regions_div" style="width: 900px; height: 500px; "></div>
      </div>
      
      

   </div>


</section>
<section class="contact">

<div class="box-container">

      <div class="box">
         <h1 style="font-size: 20px; color:#596145;text-transform: uppercase; ">Free Trade Zone Locations:: </h1>
         <div id="container"></div>
         <i style="font-size: 25px ; text-align:left">Locations:</i>
         <ul class="a" style="list-style-type: circle;">
            
            <li style="font-size: 20px ;text-align:left">Katunayake</li>
            <li style="font-size: 20px ;text-align:left">Colombo</li>
            <li style="font-size: 20px ;text-align:left">Biyagama</li>
            <li style="font-size: 20px ;text-align:left">Kandy</li>
            <li style="font-size: 20px ;text-align:left">Wathupitiwala</li>
            <li style="font-size: 20px ;text-align:left">Sithawaka</li>
            <li style="font-size: 20px ;text-align:left">Horana</li>
            <li style="font-size: 20px ;text-align:left">Mawathagama</li>
            <li style="font-size: 20px ;text-align:left">Koggala</li>
            <li style="font-size: 20px ;text-align:left">Polgahawela</li>
            
            
         </ul>
      </div>
      
      

   </div>


</section>
<br>

<br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">

<section class="contact"><div class="box-container"><div class="box">
   <h1 style="text-align: justify; color:brown; font-size: 20px;">Investment Promotion</h1><br>
<p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;">The BOI's investment promotion activities are designed to showcase Sri Lanka as a prime investment destination. This involves marketing the country’s strategic advantages, such as its geographical location, skilled workforce, and favorable trade agreements. The BOI conducts roadshows, participates in international trade fairs, and collaborates with foreign embassies to reach potential investors. Sector-specific promotional campaigns highlight opportunities in industries such as manufacturing, services, tourism, and IT, emphasizing the country’s competitive edge in these areas.</p>
<br>
<br><h1 style="text-align: justify; color:brown; font-size: 20px;">Investment Facilitation</h1>


<p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;">Investment facilitation is a core function of the BOI, aimed at providing a smooth and efficient entry process for investors. This includes offering pre-investment advisory services, assisting with site selection, and navigating regulatory requirements. The BOI operates a one-stop-shop service, where investors can obtain necessary approvals and permits, significantly reducing bureaucratic hurdles and expediting project timelines. Additionally, the BOI offers tailored support through dedicated account managers who assist investors throughout the project lifecycle.
</p><br>
<br>
<h1 style="text-align: justify; color:brown; font-size: 20px;">Incentives and Infrastructure Development</h1>

<p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;">To attract high-value investments, the BOI offers a range of incentives, including tax holidays, duty exemptions, and preferential tax rates. These incentives are designed to enhance the financial viability of projects and encourage reinvestment. Furthermore, the BOI plays a critical role in infrastructure development, working with investors to establish industrial zones, export processing zones, and other specialized infrastructure. These zones provide essential services such as utilities, logistics support, and streamlined customs procedures, creating an enabling environment for businesses to thrive.
</p><br>
<br>
<h1 style="text-align: justify; color:brown; font-size: 20px;">Policy Advocacy and Reforms</h1>

<p style="text-align: justify; color: rgb(4, 44, 20); font-size: 20px;"> The BOI is also instrumental in policy advocacy, working closely with the government to improve the overall investment climate. This involves identifying regulatory bottlenecks, proposing legislative reforms, and ensuring that policies remain aligned with international best practices. The BOI engages with stakeholders, including investors, industry associations, and government agencies, to gather feedback and drive continuous improvement in the investment ecosystem.
<br>
<br>
By integrating these functions, the BOI of Sri Lanka not only attracts foreign direct investment but also ensures that investors receive robust support and a conducive environment to achieve sustainable business success.</p>
</p>
</div></div></section>





<section class="contact">

   

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <a href="tel:1234567890">123-456-7890</a>
         <a href="tel:1112223333">111-222-3333</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <a href="mailto:shaikhanas@gmail.com">shaikhanas@gmail.come</a>
         <a href="mailto:anasbhai@gmail.com">anasbhai@gmail.come</a>
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

   
</body>
</html>