<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Contact Us | Woodlyn Sales</title>
  <meta name="description" content="Woodlyn Sales - Industry Leading Solutions for Michigan Utilities">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta property="og:title" content="Contact Us">
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
    <h5 class="phone float-right mr-4 mt-2">(734)-453-2754</h5>
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
        <li class="nav-item">
          <a class="nav-link" href="suppliers.php">Suppliers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      </div>
  </nav>
  <!-- End Nav -->

  <!-- Main Content -->

  <div class="container-fluid mx-1 p-4 bg-img" style="background-image: url('img/supplier-art/bg/bg_powercon.jpg')">
  <form action="scripts/submit_request.php" method="post" class="container w-75 p-4 text-center needs-validation" style="background-color: #eeeeee" novalidate>
    <h1>Contact Us</h1>
    <div class="form-row">
    <div class="form-group w-50">
      <label for="fname">First Name*</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name" required>
      <div class="invalid-tooltip">
        Please provide your first name
      </div>
    </div>
    <div class="form-group w-50">
      <label for="lname">Last Name*</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name" required>
      <div class="invalid-tooltip">
        Please provide your last name
      </div>
      </div>
    </div>
    <div class="form-group">
      <label for="company">Company</label>
      <input type="text" class="form-control" id="company" name="company" placeholder="Enter your company">
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter your title">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
    </div>
    <div class="form-group">
      <label for="email">Email address*</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
      <div class="invalid-tooltip">
        Please provide a valid email.
      </div>
    </div>
    <div class="form-group">
      <label for="comments">Comments/Questions</label>
      <textarea class="form-control" id="comments" name="comments" placeholder="Enter comments or questions" rows="3"></textarea>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="newsletter">
      <label class="form-check-label" for="newsletter" aria-describedby="newsletterHelp"><small id="newsletterHelp" class="form-text text-muted">Sign me up for email newsletters from Woodlyn Sales about our supplier's products.</small></label>
    </div>

    <button type="submit" class="btn btn-primary mt-4">Submit</button>
  </form>
  </div>

  <!--                       Footer                       -->
  <footer class="container-fluid w-100 p-4 text-center" style="color: #ddd; background-color: #565656; min-width: 100%;">
    <div>
      <hr />
      <p class="text-center">
        <a class="mx-2" href="index.php">Home</a>
        <a class="mx-2" href="solutions.php">Solutions</a>
        <a class="mx-2" href="suppliers.php">Suppliers</a>
        <a class="mx-2" href="aboutus.php">About Us</a>
        <a class="mx-2" href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
      </p>
      <hr />
    </div>
    <div class="container w-100">
      <a id="logo-main" class="navbar-brand mx-auto" href="#">Woodlyn Sales</a>
        <br />
      <p class="text-center">7120 N. Haggerty Rd, Suite 300A, Canton, MI 48187
      <br />Phone: 734-453-2754
      <br />Email: woodlyn@woodlynsales.com
      </p>
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

  <!-- Form Validation -->
  <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

  <!-- !!! Google Analytics: Site ID: UA-304203-5 !!! -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'CHANGE TO SITE ID', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
