<!doctype html>
<html class="no-js" lang="">

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
  <title>Suppliers | Woodlyn Sales</title>
  <meta name="description" content="Woodlyn Sales - Industry Leading Solutions for Michigan Utilities">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta property="og:title" content="">
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

  <!-- Nav -->
  <nav class="navbar navbar-light navbar-expand-lg sticky-top" style="background-color: #0085CA; z-index: 2;">
    <!-- Navbar content -->
    <a id="logo-main" class="navbar-brand" href="index.php">Woodlyn Sales</a>    
    <h5 class="float-right mr-4 mt-2" style='font-weight: 500; color: white; line-height: 3rem'>(734)-453-2754</h5>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse nav-tabs navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="solutions.php">Solutions</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Suppliers <span class="sr-only">(current)</span></a>
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
  <!-- End Nav -->

  <!-- Main Content -->
  <div id="quickSelect" class="d-none d-lg-block container list-group align-items-center" style="height: 100%; background-color: #888888; margin-top: -20px; padding-top: 3rem; color: rgba(200, 200, 200, 0.7); z-index: 1;">
    <?php 
      $i = 20;
      $sql = "SELECT name, logo_file FROM suppliers ORDER BY name;";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {  
          echo '
            <a class="list-group-item list-group-item-action" href="#' . $row["name"]. '"><img src="img/supplier-art/' . $row["logo_file"]. '" height="20px" /></a>
          ';
          $i = $i+45;
        }
      } else {
        echo "Error, please advise web administrator.";
      }
    ?>
  </div>
  <div id="suppliers" data-spy="scroll" data-target="#quickSelect" data-offset="250">    
  <!-- Jumbotron - Home -->
  <div id="jumbotron-supp" class="jumbotron mx-auto">
    <div id="jumbotron-supp-inner">
      <h1 class="display-4">Representing Suppliers in Michigan Since 1997</h1>
      <p>Woodlyn Sales serves Utilities, Muncipals, and Co-ops across both lower and upper peninsula.</p>
      <a class="btn btn-primary btn-lg" href="aboutus.php#affliations" role="button">See Our Affliations</a>
    </div>
  </div>
  <!-- End Jumbotron -->
    <!-- Parallax -->
    <?php 
      $sql = "SELECT id, name, product_line, subheading, url, logo_file, bg_file, bg_color FROM suppliers ORDER BY name;";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo '
          <span class="anchor" id="' . $row["name"].'"></span>
            <div class="parallax" style=" background-image: url(\'img/supplier-art/bg/' . $row["bg_file"].'\'); background-color: ' . $row["bg_color"].'">
              <a href="' . $row["url"].'" class="supp-link" target="_blank">
                <div class="card container-fluid" style="min-height: 200px; background-color: white;">
                  <div class="d-sm-flex align-items-center mx-auto my-auto p-5" style="min-height: 100px; max-width: 1000px;">
                    <div class="container mx-auto pb-3" style="width: 20%; min-width: 200px;">
                      <img class="mx-auto" style="max-width: 90%; max-height: 100px;" src="img/supplier-art/'. $row["logo_file"]. '" />
                    </div>
                    <div class="container mx-auto" style="width: 70%; min-width: 150px;">
                      <h4>' . $row["name"]. '</h4><h6>' . $row["subheading"]. ' </h6>     
                      <div>' . $row["product_line"]. '</div>
                      ' . $row["url"].'
                    </div>
                  </div>
                </div>
              </a>
            </div>
          ';}
      } else {
        echo "Error, please advise web administrator.";
      }
      $conn->close();
    ?>
    <!--  End Parallax -->

  </div>

  <!--                       Footer                       -->
  <footer class="container-fluid w-100 p-4 text-center">
    <div>
      <hr />
      <p class="text-center">
        <a class="mx-2" href="index.php">Home</a>
        <a class="mx-2" href="solutions.php">Solutions</a>
        <a class="mx-2" href="suppliers.php">Suppliers <span class="sr-only">(current)</span></a>
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
      <p class="text-center copyright">© Copyright 2020 Woodlyn Sales, Inc. All Rights Reserved. Other products, images, logos, and company names mentioned herein may be the trademarks of their respective owners.</p>
    </div>
  </footer>
  <!--                      End Footer                    -->

  <!--                      End Content                   -->
  <!-- JS Calls -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <!-- Material Design JS Intializiation -->
  <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <script>
  $('[data-spy="scroll"]').on('activate.bs.scrollspy', function () {
    if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) {
        return;
    }

    // Here we detect the targets class.  I'm just using bg-
    // light.  Not the most robust solution, but it can be
    // tweaked.
    var isInView = $(obj.relatedTarget).hasClass('in-view');
    // note that navbar needs two classes to work.  If you
    // only set bg-light/bg-dark, the link text color doesn't
    // change.
    $('#suppliers').toggleClass('in-view out-view', isInView)
                .toggleClass('in-view out-view', !isInView);
  })
  </script>

  <!-- !!! Google Analytics: Site ID: UA-304203-5 !!! -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'CHANGE TO SITE ID', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
