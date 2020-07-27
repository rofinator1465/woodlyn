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
  <title>Solutions | Woodlyn Sales</title>
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
  <nav class="navbar navbar-light navbar-expand-lg sticky-top" style="background-color: #0085CA;">
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
        <li class="nav-item active">
          <a class="nav-link" href="#">Solutions<span class="sr-only">(current)</span></a>
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
  <!-- End Nav -->

  <!-- Main Content -->

  <!--                      Solutions Drawers                         -->
  <div id="solutions-drawer" class="container-fluid mx-auto p-2 mt-4">

    <!--  Testing Solutions -->
    <div class="card mx-auto w-100">
      <div id="test" class="container-fluid p-5">
        <div class="mx-auto" style="width: 90%;">
          <h4>Testing Solutions</h4>       
          <p style="width: 80%">Our suppliers offer industry leading solutions for utility testing needs. We can provide power analyzers, cable locators, fault locators, SF6 gas analyzers/reclaimers, line testing tools, meter test equipment and much more. </p>
          <a class="mx-auto" style="width: 100%;" data-toggle="collapse" href="#collapseTesting" aria-expanded="false" aria-controls="collapseTesting">
            <button type="button" class="btn btn-primary bmd-btn-icon w-100">
            <h6>See Suppliers</h6>
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
          ?>
            </div>
          </div>
        </div>

    <!--  Generation Solutions -->
    <div class="card mx-auto w-100">
      <div id="generation" class="container-fluid p-5 w-100">
        <div class="mx-auto" style="width: 80%;">
          <h4>Generation Solutions</h4>
          <p class="float-right" style="width: 80%">We represent a wide range of products perfect for generation facilities. Transformers, bushings, and measurement products are just some the solutions we offer.</p>
          <a class="mx-auto" style="width: 100%; height: 100%" data-toggle="collapse" href="#collapseGeneration" aria-expanded="false" aria-controls="collapseGeneration">
            <button type="button" class="btn btn-primary bmd-btn-icon w-100">
            <h6>See Suppliers</h6>
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
          <p style="width: 80%">We represent manufacturers who lead the way in Metering and Distribution. Our offerings range from smart meter products and distribution management solutions to line testing.</p>
          <a class="mx-auto" style="width: 100%; height: 100%" data-toggle="collapse" href="#collapseMetering" aria-expanded="false" aria-controls="collapseMetering">
            <button type="button" class="btn btn-primary bmd-btn-icon w-100">
            <h6>See Suppliers</h6>
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
          <p class="float-right" style="width: 80%">Woodlyn Sales offers many new and innovative solutions for the Utilities and Electrical industries. Monitors, fault detectors, battery chargers and many more.</p>
          <a class="mx-auto" style="width: 100%; height: 100%" data-toggle="collapse" href="#collapseInnovate" aria-expanded="false" aria-controls="collapseInnovate">
            <button type="button" class="btn btn-primary bmd-btn-icon w-100">
            <h6>See Suppliers</h6>
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
          ?>
          </div>
        </div>
      </div>
    </div>
    <!--  END Innovative Solutions -->
  </div>
  <!--  END Solutions Drawer -->

  
  <!-- Carousel 
  <div class="container-fluid p-4" style="background-color: rgba(0,0,0,.40)">
    <div id="landingCarousel" class="carousel slide w-100 mx-auto m-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#landingCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#landingCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner mx-auto" style="max-width: 1000px">
        <div class="carousel-item active">
          <tbody>
          <tr>
          <td class="layout" align="center" valign="top" style="padding: 15px 5px;">
          <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
          <tbody>
          <tr>
          <td class="layout-container-border" align="center" valign="top" style="background-color: #009AC9; padding: 0px;" bgcolor="#009AC9">
          <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: #009AC9;" bgcolor="#009AC9">
          <tbody>
          <tr>
          <td class="layout-container" align="center" valign="top" style="background-color: #ffffff; padding: 0;" bgcolor="#ffffff">
          <div class="">
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-image">
          <table class="editor-image logo-container" style="min-width: 100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td align="center" valign="top" style="padding-top: 0px; padding-bottom: 0px;">
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div style="text-align: center;" align="center"><span style="font-size: 24px; color: rgb(0, 133, 202); font-weight: bold;">Power Industry Tech Showcase - July 2020</span></div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="center-text content editor-col OneColumnMobile" width="100%" align="left" valign="top" style="background-color: rgb(0, 154, 201); text-align: center;" bgcolor="009AC9">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text center-text content-text" align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: center; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px;">
          <div><table class="editor-image OneColumnMobile" style="mso-table-rspace: 5.75pt;" align="right" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="mobile-hidden" width="15" height="1" align="center" valign="top" style="height: 1px; line-height: 1px; padding: 0px;">
          <img alt="" width="15" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: auto; max-width: 100%;">
          </td>
          <td class="image-cell " align="center" valign="top" style="padding: 0px;">
          <div class="publish-container"> <img alt="" class="" style="display: block; height: auto !important; max-width: 100% !important;" width="123" border="0" hspace="0" vspace="0" src="https://files.constantcontact.com/56b3515c701/cf335dcb-1bb1-4cd9-b57d-ffc86780dc60.png">
          </div>
          </td>
          </tr>
          <tr>
          <td class="mobile-hidden" width="5" height="5" align="center" valign="top" style="height: 1px; line-height: 1px; padding: 0px;">
          <img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: auto; max-width: 100%;">
          </td>
          <td class="mobile-hidden" height="5" align="center" valign="top" style="height: 5px; line-height: 1px; padding: 0px;">
          <img alt="" width="1" height="5" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: auto; max-width: 100%;">
          </td>
          </tr>
          </tbody>
          </table></div>
          <div class="text-container galileo-ap-content-editor"><div>
          <div><span style="font-size: 18px; color: rgb(255, 255, 255); font-weight: bold;">Arbiter Systems - Model 928A </span></div>
          <div><span style="font-size: 18px; color: rgb(255, 255, 255); font-weight: bold;">Power System Multimeter</span></div>
          </div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-spacer">
          <table class="editor-spacer" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-base" style="padding-bottom: 20px; height: 1px; line-height: 1px;" width="100%" align="center" valign="top">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="split-layout-margin" align="left" valign="top" style="background-color: #ffffff; padding: 0px 25px;" bgcolor="#ffffff">
          <table class="feature-split-container" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="mobile-hidden layout-container" width="5" style="height: 5px; line-height: 1px; background-color: #ffffff; padding: 0;" align="center" valign="top" bgcolor="#ffffff"><img style="display: block; width: 5px; height: 5px;" alt="" width="5" height="5" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif"></td>
          <td class="split split-border editor-col OneColumnMobile" width="100%" align="left" valign="top" style="border-collapse: separate; border: 1px solid #569cbf;">
          <div class="gl-contains-image">
          <table class="editor-image content-image editor-image-vspace-on" style="min-width: 100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td align="center" valign="top" style="padding-top: 10px; padding-bottom: 10px;">
          <div class="publish-container"> <img alt="" class="" style="display: block; height: auto; max-width: 100%;" width="290" border="0" hspace="0" vspace="0" src="https://www.arbiter.com/images/catalog/928A_front.jpg">
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          <td class="mobile-hidden layout-container" width="5" style="height: 10px; line-height: 1px; background-color: #ffffff; padding: 0;" align="center" valign="top" bgcolor="#ffffff"><img style="display: block; width: 5px; height: 10px;" alt="" width="5" height="10" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif"></td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-spacer">
          <table class="editor-spacer" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-base" style="padding-bottom: 10px; height: 1px; line-height: 1px;" width="100%" align="center" valign="top">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text center-text content-text" align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: center; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div><span style="font-size: 16px; color: rgb(0, 154, 201); font-style: italic; font-weight: bold;">Built by Power Professionals, For Power Professionals</span></div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div style="text-align: center;" align="center"><span style="font-size: 14px; color: rgb(0, 0, 0); font-weight: bold; font-family: Helvetica, Arial, sans-serif;">Handheld, affordable Power System Multimeter measures power, energy, flicker, harmonics, phase angle and displays waveforms.</span></div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="content editor-col OneColumnMobile" width="55%" align="left" valign="top">
          <div><div class="column-resize-bar">
          <span class="line"></span>
          <span class="grabber"></span>
          </div></div>
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 15px 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div style="text-align: center;" align="center"><span style="font-size: 20px; color: rgb(0, 154, 201); font-weight: bold;">Key Features</span></div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 15px 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><ul>
          <li style="font-size: 14px; color: rgb(0, 0, 0);">
          <a href="https://www.arbiter.com/support/downloads/ct-characterization-files.php" rel="noopener noreferrer" target="_blank" style="font-size: 14px; color: rgb(0, 0, 0); text-decoration: none; font-style: italic; font-family: Helvetica, Arial, sans-serif; font-weight: normal;">Downloadable</a><span style="font-size: 14px; color: rgb(0, 0, 0); font-style: italic; font-family: Helvetica, Arial, sans-serif;">&nbsp;CT characterization files.</span>
          </li>
          <li style="font-size: 14px; color: rgb(0, 0, 0);"><span style="font-size: 14px; color: rgb(0, 0, 0); font-style: italic; font-family: Helvetica, Arial, sans-serif;">Low Cost</span></li>
          <li style="font-size: 14px; color: rgb(0, 0, 0);"><span style="font-size: 14px; color: rgb(0, 0, 0); font-style: italic; font-family: Helvetica, Arial, sans-serif;">0.1 % Accuracy</span></li>
          <li style="font-size: 14px; color: rgb(0, 0, 0);"><span style="font-size: 14px; color: rgb(0, 0, 0); font-style: italic; font-family: Helvetica, Arial, sans-serif;">Power and Energy</span></li>
          <li style="font-size: 14px; color: rgb(0, 0, 0);"><span style="font-size: 14px; color: rgb(0, 0, 0); font-style: italic; font-family: Helvetica, Arial, sans-serif;">Flicker per IEC 61000-4-15</span></li>
          <li style="font-size: 14px; color: rgb(0, 0, 0);"><span style="font-size: 14px; color: rgb(0, 0, 0); font-style: italic; font-family: Helvetica, Arial, sans-serif;">Harmonics I, V to 50th, THD</span></li>
          <li style="font-size: 14px; color: rgb(0, 0, 0);"><span style="font-size: 14px; color: rgb(0, 0, 0); font-style: italic; font-family: Helvetica, Arial, sans-serif;">Phase Angle I-I, V-V, I-V</span></li>
          <li style="font-size: 14px; color: rgb(0, 0, 0);"><span style="font-size: 14px; color: rgb(0, 0, 0); font-style: italic; font-family: Helvetica, Arial, sans-serif;">Waveform Display</span></li>
          </ul></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 15px 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div>
          <div style="text-align: center;" align="center"><span style="font-size: 20px; color: rgb(0, 154, 201); font-weight: bold;">Included with Starter Kit</span></div>
          <div style="text-align: center;" align="center"><span style="font-size: 20px; color: rgb(0, 154, 201); font-weight: bold;">(Now Standard)</span></div>
          </div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 15px 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><ul>
          <li style="font-size: 14px;"><span style="font-size: 14px; font-weight: bold;">Two (2) Voltage Probe Lead Sets</span></li>
          <li style="font-size: 14px;">
          <span style="font-size: 14px; font-weight: bold;">External power supply</span><span style="font-size: 14px;">, + 7 Vdc</span>
          </li>
          <li style="font-size: 14px;">
          <span style="font-size: 14px; font-weight: bold;">100:1 Clamp-on CT</span><span style="font-size: 14px;">, 150 A, 10 mV/A (1 V @ 100 A ac)</span>
          </li>
          <li style="font-size: 14px;"><span style="font-size: 14px; font-weight: bold;">928A Bail Assembly</span></li>
          <li style="font-size: 14px;"><span style="font-size: 14px; font-weight: bold;">Four (4) AA Alkaline cells</span></li>
          <li style="font-size: 14px;">
          <span style="font-size: 14px; font-weight: bold;">CT Cable</span><span style="font-size: 14px;">, Voltage Output</span>
          </li>
          <li style="font-size: 14px;">
          <span style="font-size: 14px; font-weight: bold;">CT characterization</span><span style="font-size: 14px;">, 100 mA to 100 A (other ranges are available for additional fee. Contact us for more information)</span>
          </li>
          <li style="font-size: 14px;"><span style="font-size: 14px; font-weight: bold;">928A Soft Carrying Case</span></li>
          </ul></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          <td class="content editor-col OneColumnMobile" width="45%" align="left" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text content-text" align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px 10px 15px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div>
          <div>
          <span style="font-size: 14px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">The Model 928A Power System Multimeter with Floating-Point DSP™&nbsp;Digital Signal Analysis is an AC Power measurement instrument, providing outstanding performance and flexibility in a small, hand-held package. </span><span style="font-size: 14px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: bold;">Not only does the Model 928A measure basic data and power quantities, but it also measures power quality including harmonics, flicker, sags, surges and interruptions.</span><span style="font-size: 14px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;"> Incorporating a graphic LCD display, serial communications, real time clock and an unprecedented combination of features makes the Model 928A the ideal instrument for the power professional.</span>
          </div>
          <div><br></div>
          <div><span style="font-size: 14px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">The Starter Kit, now standard, complements the Model 928A, making it a complete measurement system.</span></div>
          <div><br></div>
          <div><span style="font-size: 14px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">For current measurements, the Model 928A works with several Arbiter external Current Transformers available as accessories to the unit.</span></div>
          </div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div style="text-align: center;" align="center"><span style="font-size: 16px; color: rgb(172, 116, 109); font-weight: bold;">Demo Unit Available Upon Request</span></div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="button editor-col OneColumnMobile" width="100%" align="left" valign="top">
          <div class="gl-contains-button">
          <table class="editor-button" width="100%" cellpadding="0" cellspacing="0" border="0" style="width: 100%; min-width: 100%;">
          <tbody>
          <tr>
          <td class="editor-button-container " style="font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; text-decoration: none; padding: 10px 30px;">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="galileo-ap-content-editor" style="width: 100%; min-width: 100%;">
          <tbody>
          <tr>
          <td class="MainTextFullWidthTD" align="center" valign="top" style="font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; text-decoration: none; padding: 0px;">
          <table border="0" cellpadding="0" cellspacing="0" style="width: initial; border-spacing: 0; background-color: #009AC9; min-width: initial; padding: 0; border: none;" bgcolor="#009AC9">
          <tbody>
          <tr>
          <td class="MainTextFullWidthTD" align="center" valign="top" style="font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; text-decoration: none; padding: 16px 25px;">
          <div>
          <div class="MainTextFullWidth"><a href="https://www.arbiter.com/catalog/product/model-928a.php#tabs-2" style="font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; text-decoration: none;" target="_blank">See Detailed Specifications</a></div>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="divider-container editor-col OneColumnMobile" width="100%" align="left" valign="top">
          <div class="gl-contains-divider">
          <table class="editor-divider" width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="divider-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-content-editor" style="cursor: default; min-width: 100%;">
          <tbody>
          <tr>
          <td class="divider-base divider-solid" width="100%" align="center" valign="top" style="padding: 20px 0px;">
          <table style="width: 90%; min-width: 90%; height: 1px;" cellpadding="0" cellspacing="0" border="0" align="center">
          <tbody>
          <tr>
          <td height="1" align="center" style="padding-bottom: 0px; border-bottom-style: none; height: 1px; line-height: 1px; background-color: #009AC9;" bgcolor="#009AC9">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="subheadline editor-col OneColumnMobile" width="100%" align="left" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text subheadline-text" align="left" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 16px; color: #009AC9; text-align: center; display: block; word-wrap: break-word; line-height: 1.2; font-weight: bold; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div>
          <span style="color: rgb(94, 129, 202); font-family: Helvetica, Arial, sans-serif;">For more information on this product, and many others designed for the power industry, contact Woodlyn Sales at </span><span style="color: rgb(94, 129, 202); font-family: Helvetica, Arial, sans-serif; text-decoration: underline;">(734) 453-2754</span><span style="color: rgb(94, 129, 202); font-family: Helvetica, Arial, sans-serif; font-weight: normal;"> </span><span style="color: rgb(94, 129, 202); font-family: Helvetica, Arial, sans-serif;">or visit our website at woodlynsales.com</span>
          </div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="spacer editor-col OneColumnMobile" width="100%" align="left" valign="top">
          <div class="gl-contains-spacer">
          <table class="editor-spacer" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-base" style="padding-bottom: 16px; height: 1px; line-height: 1px;" width="100%" align="center" valign="top">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-spacer">
          <table class="editor-spacer" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-base" style="padding-bottom: 20px; height: 1px; line-height: 1px;" width="100%" align="center" valign="top">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
        </div>
        <div class="carousel-item mx-auto">
          <tbody>
          <tr>
          <td class="layout" align="center" valign="top" style="padding: 15px 5px;">
          <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
          <tbody>
          <tr>
          <td class="layout-container-border" align="center" valign="top" style="background-color: #009AC9; padding: 0px;" bgcolor="#009AC9">
          <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: #009AC9;" bgcolor="#009AC9">
          <tbody>
          <tr>
          <td class="layout-container" align="center" valign="top" style="background-color: #ffffff; padding: 0;" bgcolor="#ffffff">
          <div class="">
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-image">
          <table class="editor-image logo-container" style="min-width: 100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td align="center" valign="top" style="padding-top: 0px; padding-bottom: 0px;">
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div style="text-align: center;" align="center"><span style="font-size: 24px; color: rgb(0, 133, 202); font-weight: bold;">Power Industry Tech Showcase - June 2020</span></div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="center-text content editor-col OneColumnMobile" width="100%" align="left" valign="top" style="background-color: rgb(0, 154, 201); text-align: center;" bgcolor="009AC9">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text center-text content-text" align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: center; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px;">
          <div><table class="editor-image OneColumnMobile" style="mso-table-rspace: 5.75pt;" align="right" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="mobile-hidden" width="15" height="1" align="center" valign="top" style="height: 1px; line-height: 1px; padding: 0px;">
          <img alt="" width="15" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: auto; max-width: 100%;">
          </td>
          <td class="image-cell " align="center" valign="top" style="padding: 0px;">
          <div class="publish-container">  <img alt="" class="" style="display: block; height: auto !important; max-width: 100% !important;" width="164" border="0" hspace="0" vspace="0" src="https://files.constantcontact.com/56b3515c701/c12d7620-4d51-4b84-8c6a-a6b72f2d8bee.png">
          </div>
          </td>
          </tr>
          <tr>
          <td class="mobile-hidden" width="5" height="5" align="center" valign="top" style="height: 1px; line-height: 1px; padding: 0px;">
          <img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: auto; max-width: 100%;">
          </td>
          <td class="mobile-hidden" height="5" align="center" valign="top" style="height: 5px; line-height: 1px; padding: 0px;">
          <img alt="" width="1" height="5" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: auto; max-width: 100%;">
          </td>
          </tr>
          </tbody>
          </table></div>
          <div class="text-container galileo-ap-content-editor"><div>
          <div><span style="font-size: 18px; color: rgb(255, 255, 255); font-weight: bold;">Primax Technologies - P600 Flex-Power </span></div>
          <div><span style="font-size: 18px; color: rgb(255, 255, 255); font-weight: bold;">Portable Charger</span></div>
          </div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-spacer">
          <table class="editor-spacer" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-base" style="padding-bottom: 20px; height: 1px; line-height: 1px;" width="100%" align="center" valign="top">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-image">
          <table class="editor-image" style="min-width: 100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td align="center" valign="top" style="padding-top: 0px; padding-bottom: 0px;">
          <div class="publish-container">  <img alt="" class="" style="display: block; height: auto !important; max-width: 100% !important;" width="274" border="0" hspace="0" vspace="0" src="https://files.constantcontact.com/56b3515c701/d36f9115-574e-4262-a8a0-c93b491cb344.png">
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-image">
          <table class="editor-image editor-image" style="min-width: 100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td align="center" valign="top" style="padding-top: 0px; padding-bottom: 0px;">
          <div class="publish-container">  <img alt="" class="" style="display: block; height: auto !important; max-width: 100% !important;" width="274" border="0" hspace="0" vspace="0" src="https://files.constantcontact.com/56b3515c701/9c36230e-cda7-4ed8-b810-2bab0fe6661d.png">
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-image">
          <table class="editor-image editor-image" style="min-width: 100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td align="center" valign="top" style="padding-top: 0px; padding-bottom: 0px;">
          <div class="publish-container">  <img alt="" class="" style="display: block; height: auto !important; max-width: 100% !important;" width="274" border="0" hspace="0" vspace="0" src="https://files.constantcontact.com/56b3515c701/b8f7816d-8b94-46aa-ada5-f69fbb492724.png">
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-spacer">
          <table class="editor-spacer" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-base" style="padding-bottom: 10px; height: 1px; line-height: 1px;" width="100%" align="center" valign="top">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text center-text content-text" align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: center; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div><span style="font-size: 16px; color: rgb(0, 154, 201); font-weight: bold; font-style: italic;">Your Everyday Service Charger</span></div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div>
          <div style="text-align: center;" align="center"><span style="font-size: 14px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: bold;">Ideal For: </span></div>
          <div style="text-align: center;" align="center"><span style="font-size: 14px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: bold;">﻿Service - Temporary Replacement - Limited Space - Refurbishing</span></div>
          </div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="content editor-col OneColumnMobile" width="60%" align="left" valign="top">
          <div><div class="column-resize-bar">
          <span class="line"></span>
          <span class="grabber"></span>
          </div></div>
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 15px 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div style="text-align: center;" align="center"><span style="font-size: 20px; color: rgb(0, 154, 201); font-weight: bold;">Key Features</span></div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text " align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 15px 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div>
          <ul>
          <li><span style="font-weight: bold; font-style: italic;">Feather Weight</span></li>
          <li><span style="font-weight: bold; font-style: italic;">250Vdc-17A/ 125Vdc-35A</span></li>
          <li><span style="font-weight: bold; font-style: italic;">48Vdc-65A / 24Vdc-60A</span></li>
          <li><span style="font-style: italic;">Smart and Fully Adjustable</span></li>
          <li><span style="font-style: italic;">Clean Power</span></li>
          <li><span style="font-style: italic;">For All Types of Battery: Lead Acid, Ni-Cd, VRLA, Li-Ion</span></li>
          <li><span style="font-style: italic;">Virtual Pure DC</span></li>
          <li><span style="font-style: italic;">Easy Redundancy</span></li>
          </ul>
          <div><br></div>
          <div style="text-align: center;" align="center"><span style="font-style: italic; font-weight: bold;">Plenty of Accessories to Fit All of Your Application's Needs.</span></div>
          <div><br></div>
          <ul>
          <li style="font-size: 14px;"><span style="font-size: 14px;">NEMA TT-30R Receptacle</span></li>
          <li style="font-size: 14px;"><span style="font-size: 14px;">Battery SB connector</span></li>
          <li style="font-size: 14px;"><span style="font-size: 14px;">Carrying handle and rubber pads for easy handling</span></li>
          <li style="font-size: 14px;"><span style="font-size: 14px;">Battery temperature probe&nbsp;</span></li>
          <li style="font-size: 14px;"><span style="font-size: 14px; font-weight: bold;">Metering &amp; Monitoring Options</span></li>
          <li style="font-size: 14px;"><span style="font-size: 14px; font-weight: bold;">Additional Alarm Options</span></li>
          </ul>
          </div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          <td class="content editor-col OneColumnMobile" width="40%" align="left" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text content-text" align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #41291e; text-align: left; display: block; word-wrap: break-word; line-height: 1.2; padding: 10px 30px 10px 15px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div>
          <div><span style="font-size: 18px; color: rgb(0, 154, 201); font-style: italic; font-weight: bold;">40lbs of Power!</span></div>
          <div style="text-align: center;" align="center"><span style="font-size: 16px; color: rgb(0, 154, 201); font-style: italic; font-weight: bold;">﻿</span></div>
          <div>
          <span style="font-weight: bold;">The portable P600 Flex-Power</span> is a compact battery charger, having low ripple and THD for clean power-efficient battery recharge and sensitive equipment. It’s user-friendly menu with its ergonomic and lightweight design makes it easy to carry for service calls where a temporary charger is needed. <span style="font-weight: bold;">This charger can provide up to 35A at 125Vdc and 65A at 24Vdc or 48Vdc perfect for substation needs. </span>It can also be used for permanent installations or to re-haul outdated chargers without much disturbance of your actual infrastructure.</div>
          </div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text headline-text" align="left" valign="top" style="font-family: Helvetica,Arial,sans-serif; font-size: 24px; color: #009AC9; text-align: center; display: block; word-wrap: break-word; line-height: 1.2; font-weight: bold; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div><span style="font-size: 16px;">Primax Helps Reduce Maintenance Expenditures, Optimizes Battery Life, and Maximizes Reliability for the Power Industry</span></div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-button">
          <table class="editor-button" width="100%" cellpadding="0" cellspacing="0" border="0" style="width: 100%; min-width: 100%;">
          <tbody>
          <tr>
          <td class="editor-button-container " style="font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; text-decoration: none; padding: 10px 30px;">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="galileo-ap-content-editor" style="width: 100%; min-width: 100%;">
          <tbody>
          <tr>
          <td class="MainTextFullWidthTD" align="center" valign="top" style="font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; text-decoration: none; padding: 0px;">
          <table border="0" cellpadding="0" cellspacing="0" style="width: initial; border-spacing: 0; background-color: #009AC9; min-width: initial; padding: 0; border: none;" bgcolor="#009AC9">
          <tbody>
          <tr>
          <td class="MainTextFullWidthTD" align="center" valign="top" style="font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; text-decoration: none; padding: 16px 25px;">
          <div>
          <div class="MainTextFullWidth"><a href="https://primaxpower.com/p600-easyswap/" style="font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; text-decoration: none;" target="_blank">See Detailed Specifications For The P600 Series</a></div>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="divider-container editor-col OneColumnMobile" width="100%" align="left" valign="top">
          <div class="gl-contains-divider">
          <table class="editor-divider" width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="divider-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-content-editor" style="cursor: default; min-width: 100%;">
          <tbody>
          <tr>
          <td class="divider-base divider-solid" width="100%" align="center" valign="top" style="padding: 20px 0px;">
          <table style="width: 90%; min-width: 90%; height: 1px;" cellpadding="0" cellspacing="0" border="0" align="center">
          <tbody>
          <tr>
          <td height="1" align="center" style="padding-bottom: 0px; border-bottom-style: none; height: 1px; line-height: 1px; background-color: #009AC9;" bgcolor="#009AC9">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="subheadline editor-col OneColumnMobile" width="100%" align="left" valign="top">
          <div class="gl-contains-text">
          <table width="100%" style="min-width: 100%;" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="editor-text subheadline-text" align="left" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 16px; color: #009AC9; text-align: center; display: block; word-wrap: break-word; line-height: 1.2; font-weight: bold; padding: 10px 30px;">
          <div></div>
          <div class="text-container galileo-ap-content-editor"><div><div>
          <span style="color: rgb(94, 129, 202); font-family: Helvetica, Arial, sans-serif;">For more information on this product, and many others designed for the power industry, contact Woodlyn Sales at </span><span style="color: rgb(94, 129, 202); font-family: Helvetica, Arial, sans-serif; text-decoration: underline;">(734) 453-2754</span><span style="color: rgb(94, 129, 202); font-family: Helvetica, Arial, sans-serif; font-weight: normal;"> </span><span style="color: rgb(94, 129, 202); font-family: Helvetica, Arial, sans-serif;">or visit our website at woodlynsales.com</span>
          </div></div></div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class="spacer editor-col OneColumnMobile" width="100%" align="left" valign="top">
          <div class="gl-contains-spacer">
          <table class="editor-spacer" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-base" style="padding-bottom: 16px; height: 1px; line-height: 1px;" width="100%" align="center" valign="top">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="galileo-ap-layout-editor" style="min-width: 100%;">
          <tbody>
          <tr>
          <td class=" editor-col OneColumnMobile" width="100%" align="" valign="top">
          <div class="gl-contains-spacer">
          <table class="editor-spacer" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-container" align="center" valign="top">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <tr>
          <td class="spacer-base" style="padding-bottom: 20px; height: 1px; line-height: 1px;" width="100%" align="center" valign="top">
          <div><img alt="" width="5" height="1" border="0" hspace="0" vspace="0" src="https://imgssl.constantcontact.com/letters/images/sys/S.gif" style="display: block; height: 1px; width: 5px;"></div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
          </table>
          </td>
          </tr>
          </tbody>
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
    </div>-->  
  </div>

  <!-- End Carousel -->


  <!--                       Footer                       -->
  <footer class="container-fluid w-100 p-4 text-center">
    <div>
      <hr />
      <p class="text-center">
        <a class="mx-2" href="index.php">Home</a>
        <a class="mx-2" href="solutions.php">Solutions <span class="sr-only">(current)</span></a>
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

  <!-- !!! Google Analytics: Site ID: UA-304203-5 !!! -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'CHANGE TO SITE ID', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
