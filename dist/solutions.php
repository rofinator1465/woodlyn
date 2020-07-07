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
  <nav class="navbar navbar-light navbar-expand-lg sticky-top" style="background-color: #0085CA;">
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
        <li class="nav-item active">
          <a class="nav-link" href="#">Solutions<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="suppliers.php">Suppliers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="affiliations.php">Affliations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <!-- End Nav -->

  <!-- Main Content -->

  <!-- Carousel -->
  <div id="landingCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#landingCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#landingCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/supplier-art/8000io_header.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/supplier-art/D3v16-PCM5-Hardware-1000x441.png" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#landingCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#landingCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- End Carousel -->

  <!--                      Solutions Drawers                         -->
  <div id="solutions-drawer" class="container-fluid mx-auto p-2" style="min-width: 400px">

    <!--  Testing Solutions -->
    <div class="card mx-auto w-100">
      <div id="test" class="container-fluid p-5">
        <div class="mx-auto" style="width: 90%;">
          <h4>Testing Solutions</h4>       
          <p style="width: 80%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quidem quas nemo quae, itaque cumque dolorem aliquid, cupiditate obcaecati vel expedita veritatis eius esse aperiam iusto doloremque animi. Porro, aperiam?</p>
          <a class="mx-auto" style="width: 100%;" data-toggle="collapse" href="#collapseTesting" aria-expanded="false" aria-controls="collapseTesting">
            <button type="button" class="btn btn-primary bmd-btn-icon w-100">
              <i class="material-icons mx-auto">keyboard_arrow_down</i>
            </button>
          </a>
        </div>
      </div>
      <div class="collapse mx-auto p-5" id="collapseTesting" style="width: 90%">
        <div class="card-deck row justify-content-around">
          <!-- Populate Cards by Solution -->
          <?php 
          $sql = "SELECT id, name, subheading, url, logo_file FROM suppliers WHERE test_sol = '1' ORDER BY name;";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo '
                <div class="card p-4 mx-auto m-sm-2 principleCard" style="min-width: 150px; max-width: 175px; min-height: 150px; max-height: 175px">
                  <img class="card-img-top mx-auto my-auto" src="img/supplier-art/' . $row["logo_file"]. '" alt="' . $row["name"]. '">
                  <div class="overlay">
                    <a href="' . $row["url"]. '" target="_blank"><div class="overlayText"><h6>' . $row["name"]. '</h6>' . $row["subheading"]. '</div></a>
                  </div>
                </div>
              ';}
            } else {
              echo "Error, please advise webadministrator.";
            }
          ?>
            </div>
          </div>
        </div>

    <!--  Generation Solutions -->
    <div class="card mx-auto w-100">
      <div id="generation" class="container-fluid p-5 w-100">
        <div class="mx-auto" style="width: 80%;">
          <h4>Generation Solutions</h4>
          <p class="float-right" style="width: 80%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quidem quas nemo quae, itaque cumque dolorem aliquid, cupiditate obcaecati vel expedita veritatis eius esse aperiam iusto doloremque animi. Porro, aperiam?</p>
          <a class="mx-auto" style="width: 100%; height: 100%" data-toggle="collapse" href="#collapseGeneration" aria-expanded="false" aria-controls="collapseGeneration">
            <button type="button" class="btn btn-primary bmd-btn-icon w-100">
              <i class="material-icons mx-auto">keyboard_arrow_down</i>
            </button>
          </a>
        </div>
      </div>
      <div class="collapse mx-auto p-5" id="collapseGeneration" style="width: 90%">
        <div class="container" style="max-width: 95%; justify-items: center">
          <div class="row justify-content-around">
              <!-- Populate Cards by Solution -->
          <?php 
          $sql = "SELECT id, name, subheading, url, logo_file FROM suppliers WHERE gen_sol = '1' ORDER BY name;";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo '
                <div class="card p-4 mx-auto m-sm-2 principleCard" style="min-width: 150px; max-width: 175px; min-height: 150px; max-height: 175px">
                  <img class="card-img-top mx-auto my-auto" src="img/supplier-art/' . $row["logo_file"]. '" alt="' . $row["name"]. '">
                  <div class="overlay">
                    <a href="' . $row["url"]. '" target="_blank"><div class="overlayText"><h6>' . $row["name"]. '</h6>' . $row["subheading"]. '</div></a>
                  </div>
                </div>
              ';}
            } else {
              echo "Error, please advise webadministrator.";
            }
          ?>
          </div>
        </div>
      </div>
    </div>
    <!--  END Generation Solutions -->

    <!--   Metering Solutions  -->
    <div class="card mx-auto w-100">
      <div id="metering" class="container-fluid p-5 w-100">
        <div class="mx-auto" style="width: 80%;">
          <h4>Metering and Distribution Solutions</h4>
          <p style="width: 80%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quidem quas nemo quae, itaque cumque dolorem aliquid, cupiditate obcaecati vel expedita veritatis eius esse aperiam iusto doloremque animi. Porro, aperiam?</p>
          <a class="mx-auto" style="width: 100%; height: 100%" data-toggle="collapse" href="#collapseMetering" aria-expanded="false" aria-controls="collapseMetering">
            <button type="button" class="btn btn-primary bmd-btn-icon w-100">
              <i class="material-icons mx-auto">keyboard_arrow_down</i>
            </button>
          </a>
        </div>
      </div>
      <div class="collapse mx-auto p-5" id="collapseMetering" style="width: 90%">
        <div class="container" style="max-width: 95%; justify-items: center">
          <div class="card-deck row justify-content-around">
                        <!-- Populate Cards by Solution -->
          <?php 
          $sql = "SELECT id, name, subheading, url, logo_file FROM suppliers WHERE metering_sol = '1' ORDER BY name;";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo '
                <div class="card p-4 mx-auto m-sm-2 principleCard" style="min-width: 150px; max-width: 175px; min-height: 150px; max-height: 175px">
                  <img class="card-img-top mx-auto my-auto" src="img/supplier-art/' . $row["logo_file"]. '" alt="' . $row["name"]. '">
                  <div class="overlay">
                    <a href="' . $row["url"]. '" target="_blank"><div class="overlayText"><h6>' . $row["name"]. '</h6>' . $row["subheading"]. '</div></a>
                  </div>
                </div>
              ';}
            } else {
              echo "Error, please advise webadministrator.";
            }
          ?>
        </div>
      </div>
    </div>
    <!--  END Metering Solutions -->

    <!--  Innovative Solutions -->
    <div class="card mx-auto w-100">
      <div id="innovate" class="container-fluid p-5 w-100">
        <div class="mx-auto" style="width: 80%;">
          <h4>Innovative Solutions</h4>
          <p class="float-right" style="width: 80%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quidem quas nemo quae, itaque cumque dolorem aliquid, cupiditate obcaecati vel expedita veritatis eius esse aperiam iusto doloremque animi. Porro, aperiam?</p>
          <a class="mx-auto" style="width: 100%; height: 100%" data-toggle="collapse" href="#collapseInnovate" aria-expanded="false" aria-controls="collapseInnovate">
            <button type="button" class="btn btn-primary bmd-btn-icon w-100">
              <i class="material-icons mx-auto">keyboard_arrow_down</i>
            </button>
          </a>
        </div>
      </div>
      <div class="collapse mx-auto p-5" id="collapseInnovate" style="width: 90%">
        <div class="container" style="max-width: 95%; justify-items: center">
          <div class="row justify-content-around">
          <!-- Populate Cards by Solution -->
          <?php 
          $sql = "SELECT id, name, subheading, url, logo_file FROM suppliers WHERE innovate_sol = '1' ORDER BY name;";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo '
                <div class="card p-4 mx-auto m-sm-2 principleCard" style="min-width: 150px; max-width: 175px; min-height: 150px; max-height: 175px">
                  <img class="card-img-top mx-auto my-auto" src="img/supplier-art/' . $row["logo_file"]. '" alt="' . $row["name"]. '">
                  <div class="overlay">
                    <a href="' . $row["url"]. '" target="_blank"><div class="overlayText"><h6>' . $row["name"]. '</h6>' . $row["subheading"]. '</div></a>
                  </div>
                </div>
              ';}
            } else {
              echo "Error, please advise webadministrator.";
            }
          ?>
          </div>
        </div>
      </div>
    </div>
    <!--  END Innovative Solutions -->
  </div>
  <!--  END Solutions Drawer -->

  <!--                       Footer                       -->
  <footer class="container w-75 m-5 mx-auto">
    <hr />
    <p class="text-center text-muted">
      <a class="mx-2" href="index.html">Home</a>
      <a class="mx-2" href="solutions.html">Solutions <span class="sr-only">(current)</span></a>
      <a class="mx-2" href="suppliers.html">Suppliers</a>
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

  <!-- !!! Google Analytics: Site ID: UA-304203-5 !!! -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'CHANGE TO SITE ID', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
