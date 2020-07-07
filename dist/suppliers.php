<!doctype html>
<html class="no-js" lang="">

<?php
$servername = "localhost";
$username = "woodlyn";
$password = "71woodlyn20";
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
  <title>Woodlyn Sales | Home</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
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

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- Nav -->
  <nav class="navbar navbar-light navbar-expand-lg sticky-top" style="background-color: #0085CA; z-index: 2;">
    <!-- Navbar content -->
    <a id="logo-main" class="navbar-brand" href="#">Woodlyn Sales</a>
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
          <a class="nav-link" href="affiliations.php">Affliations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End Nav -->

  <!-- Main Content -->
  <div id="quickSelect" class="container list-group" style="height: 100%; width: 2.5rem; background-color: #444444; position: fixed; right: 0; margin-top: -20px; padding-top: 3rem; color: rgba(255, 255, 255, 0.9); z-index: 1;">
    <a class="list-group-item list-group-item-action" href="#a">A</a>
    <a class="list-group-item list-group-item-action" href="#b">B</a>
    <a class="list-group-item list-group-item-action" href="#c">C</a>
    <a class="list-group-item list-group-item-action" href="#d">D</a>
    <a class="list-group-item list-group-item-action" href="#e">E</a>
  </div>
  <div id="suppliers" style="height: 100%; width: 100%; margin-right: 2.5rem; position: relative; overflow-y: scroll;" data-spy="scroll" data-target="#quickSelect" data-offset="100">    
  <!-- Jumbotron - Home -->
  <div id="jumbotron-home" class="jumbotron mx-auto">
    <h1 class="display-4">Solutions for the Utilities Industry</h1>
    <p class="lead">Woodlyn Sales, your total source for High Voltage equipment and services from large power transformers to electric meters for the utility, industrial and commercial markets throughout Michigan. Our philosophy is to provide our customers value with top quality products and dependable service at affordable prices. We work with our customers on their applications to ensure that the products and services they select meet or exceed their expectations. After selection, we assist in the commissioning as well as service throughout the entire product life cycle.</p>
    <hr class="my-4">
    <p>We offer the brand names you trust, specialty solutions, and many of the products Woodlyn Sales offers can be tied together to provide full substation solutions, from design to monitoring and turnkey.</p>
    <!-- p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Contact Us</a>
    </p-->
  </div>
  <!-- End Jumbotron -->
    <!-- Parallax -->

    <?php 
      $sql = "SELECT id, name, product_line, subheading, url, logo_file, bg_file FROM suppliers ORDER BY name;";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo '
            <div id="' . $row["name"].'" class="parallax" style="background-image: url(\'img/supplier-art/' . $row["bg_file"].'\');">
              <div class="card container-fluid" style="background-color: white;">
              
                <div class="d-sm-flex align-items-center mx-auto p-5" style="min-height: 100px; max-width: 1000px;">
                  <div class="container mx-auto pb-3" style="max-width: 20%; min-width: 200px;">
                    <a href="' . $row["url"].'" target="_blank"><div class="parallax-logo-1-1" style="background-image: url(\'img/supplier-art/'. $row["logo_file"]. '\');"> </div> </a>
                  </div>
                  <div class="container" style="width: 70%;">
                    <h4>' . $row["name"]. '</h4><h6>' . $row["subheading"]. ' </h6>     
                    <div>' . $row["product_line"]. '</div>
                  </div>
                </div>
               
              </div>
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
  <footer class="w-75 m-5 mx-auto my-auto">
    <hr />
    <p class="text-center text-muted">
      <a class="mx-2" href="index.html">Home</a>
      <a class="mx-2" href="solutions.html">Solutions</a>
      <a class="mx-2" href="suppliers.html">Suppliers <span class="sr-only">(current)</span></a>
      <a class="mx-2" href="affiliations.html">Affliations</a>
      <a class="mx-2" href="contact.html">Contact Us</a>
    </p>
    <hr />
    <p class="text-center text-muted">© Copyright 2020 Woodlyn Sales, Inc. All Rights Reserved. Other products, images, logos, and company names mentioned herein may be the trademarks of their respective owners.</p>
  </footer>
  <!--                       End Footer                   -->

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
