<!doctype html>
<html class="no-js" lang="english">

<?php
$servername = "localhost";
$username = "woodlyn";
$password = "";
$dbname = "woodlynsalesweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<head>
  <meta charset="utf-8">
  <title>Home | Woodlyn Sales</title>
  <meta name="description" content="Woodlyn Sales - Industry Leading Solutions for Michigan Utilities">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta property="og:title" content="Industry Leading Solutions for Michigan Utilities">
  <meta property="og:type" content="company">
  <meta property="og:url" content="woodlynsales.com">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- Material Design for Bootstrap fonts and icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

  <!-- Material Design for Bootstrap CSS -->
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

  <!-- Main Styles -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#0085CA">
</head>

<body>

  <!--                    Nav                             -->
  <nav class="navbar navbar-light navbar-expand-lg sticky-top" style="background-color: #0085CA; z-index: 2;">
    <!-- Navbar content -->
    <a id="logo-main" class="navbar-brand" href="index.php">Woodlyn Sales</a>    
    <h5 class="phone float-right mr-4 mt-2">(734)-453-2754</h5>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav nav-tabs mr-auto mt-1 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="solutions.php">Solutions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="suppliers.php">Suppliers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--                   End Nav                       -->

  <!--             Main Content (Home Page)            -->

  <!-- Jumbotron - Home -->
  <div id="jumbotron-home" class="container-fluid mx-auto">
    <div id="jumbotron-inner">
      <h1 class="mx-auto">Solutions for the Utilities Industry</h1>
      <p>Woodlyn Sales, your total source for High Voltage equipment and services from large power transformers to electric meters for the utility, industrial and commercial markets throughout Michigan. Our philosophy is to provide our customers value with top quality products and dependable service at affordable prices. We work with our customers on their applications to ensure that the products and services they select meet or exceed their expectations. After selection, we assist in the commissioning as well as service throughout the entire product life cycle.</p>
      <hr class="my-4">
      <p>We offer the brand names you trust, specialty solutions, and many of the products Woodlyn Sales offers can be tied together to provide full substation solutions, from design to monitoring and turnkey.</p>
    </div>
  </div>
  <!-- End Jumbotron -->

  <!-- Solution Cards -->
  <div id="solution-cards" class="container-fluid p-4 text-center">
    <h2 class="display-4 m-2 solution-title">Explore Solutions</h2>
    <div class="card-group w-100 mx-auto" style="color: white;">
      <div class="card p-4 mx-auto my-auto">
        <a href="solutions.php#generation">
        <img class="card-img-top mx-auto my-auto" src="img/icons/gen_icon.svg">
        <h4 class="m-2">Generation</h4>
        </a>
      </div>
      <div class="card p-4 mx-auto my-auto">
        <a href="solutions.php#metering">
        <img class="card-img-top mx-auto my-auto" src="img/icons/meter_icon.svg">
        <h4 class="m-2">Metering</h4>
        </a>
      </div>
      <div class="card p-4 mx-auto my-auto">
        <a href="solutions.php#test">
        <img class="card-img-top mx-auto my-auto" src="img/icons/test_icon.svg">
        <h4 class="m-2">Testing</h4>
        </a>
      </div>
      <div class="card p-4 mx-auto my-auto">
        <a href="solutions.php#innovate">
        <img class="card-img-top mx-auto my-auto" src="img/icons/innovate_icon.svg">
        <h4 class="m-2">Innovative Solutions</h4>
        </a>
      </div>
    </div>
  </div>
  <!-- END Solution Cards -->

  <!-- Principle Cards -->
  <div class="container text-center m-4 p-4 mx-auto" style="justify-items: center">
  <h2 class="display-4 m-4" style="font-weight: 500">We Represent</h2>
    <div class="card-deck row justify-content-around">
      <!-- Cards -->
      <?php 
      $sql = "SELECT id, name, subheading, subheading, url, logo_file FROM suppliers ORDER BY name;";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo '
            <div class="card p-4 mx-auto m-sm-2 principleCard">
              <img class="card-img-top mx-auto my-auto" src="img/supplier-art/' . $row["logo_file"]. '" alt="' . $row["name"]. '">
              <div class="overlay">
                <a href="' . $row["url"]. '" target="_blank"><div class="overlayText"><h6>' . $row["name"]. '</h6>' . $row["subheading"]. '</div></a>
              </div>
            </div>
          ';}
        } else {
          echo "Error, please advise webadministrator.";
        }
        $conn->close();
      ?>
    </div>
  </div>
  <!-- End Principle Cards -->

  <!--                       Footer                       -->
  <footer class="container-fluid w-100 p-4 text-center">
    <div>
      <hr />
      <p class="text-center">
        <a class="mx-2" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="mx-2" href="solutions.php">Solutions</a>
        <a class="mx-2" href="suppliers.php">Suppliers</a>
        <a class="mx-2" href="aboutus.php">About Us</a>
        <a class="mx-2" href="contact.php">Contact Us</a>
      </p>
      <hr />
    </div>
    <div class="container w-100">
      <a id="logo-main" class="navbar-brand mx-auto" href="#">Woodlyn Sales</a>
        <br />
      <p class="text-center">7120 N. Haggerty Rd, Suite 300A, Canton, MI 48187
      <br />Phone: 734-453-2754
      <br />Email: woodlyn@woodlynsales.com</p>
    </div>
    <div class="container-fluid w-100">
      <p class="text-center copyright">© Copyright 2020 - Woodlyn Sales, Inc. - All Rights Reserved. Other products, images, logos, and company names mentioned herein may be the trademarks of their respective owners.</p>
    </div>
  </footer>
  <!--                      End Footer                    -->

  <!--                      End Content                   -->


  <!--                      JS Calls                      -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <!-- Material Design JS Intializiation -->
  <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- !!! Google Analytics: Site ID: UA-304203-5 !!! -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'CHANGE TO SITE ID', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <!--                      End JS Calls                   -->
</body>

</html>
