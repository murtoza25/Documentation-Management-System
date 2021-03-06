<?php
include "session.php";
session::checksession();
?>

<?php
include "config.php";
include "database.php";
?>

<?php
$db=new database();
 ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stylish Portfolio - Start Bootstrap Template</title>


  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php
         if(isset($_GET['action']) && $_GET['action']=="logout" ){
    
             session::destroy();
         }


     ?>

    <img src="img/bg-callout.jpg" style="float: left">
    <div class="un+logout" style="float: right;
    margin: 0px 12px;
    padding: 0px 78px;
    font-size: 21px;">
    <p> <?php
      $data = mysqli_query ($db->link,"select * from admin where  username='$_SESSION[user]'");
      $name=mysqli_fetch_array($data);
      echo "<h5>Welcome<span style='color:#61A300; margin:1px 1px;'> $name[firstname] $name[lastname]</span></h5>";
         ?>
        
          

       </p>

     </div>
  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Start Bootstrap</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Notices</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Documents</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">

    <div class="container text-center my-auto">
      <h1 class="mb-1", style="color: orange">C D I P</h1>
      <h3 class="mb-5",  style="color: orange">
        <em>A Documentation Management System</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about", style="color: orange">Find Out More</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2 style="color: orange">Career Development for IT Professionals</h2>
          <p class="lead mb-5">Center for development of IT Professionals (CDIP) established at United International University (UIU) with the goal to prepare or develop the engineering students properly for fitting themselves in to industry.  CDIP conducts different IT industrial training’s for enhancing the IT skills of the students and to make them ready for both local/global IT industries.
           </p>
          <a class="btn btn-dark btn-xl js-scroll-trigger"  href="http://cdip.uiu.ac.bd/",  style="color: orange">Official website</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Services</h3>
        <h2 class="mb-5">Notices</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-screen-smartphone"></i>
          </span>
          <h4>
           <a class="btn btn-dark btn-xl js-scroll-trigger"  href="cv.php",  style="color: orange"> CV Submission </a>

          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">

          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i>
          </span>
          <h4>
          <a class="btn btn-dark btn-xl js-scroll-trigger"  href="upload.php",  style="color: orange">Upload Files</a>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-like"></i>
          </span>
          <h4>
             <a class="btn btn-dark btn-xl js-scroll-trigger"  href="download.php",  style="color: orange">Download Files</a>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-mustache"></i>
          </span>
          <h4>
            <a class="btn btn-dark btn-xl js-scroll-trigger"  href="http://cdip.uiu.ac.bd/category/notices/",  style="color: orange"> Current Notices </a>

          </h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Callout -->
  <section class="callout">
    <div class="container text-center">
      <h2 class="mx-auto mb-5">Apply for
        <em>CDIP</em>
      </h2>
      <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/template-overviews/stylish-portfolio/">SUBMIT CV!</a>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5">Office Gallery</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Stationary</h2>
                <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
              </span>
            </span>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="", width="100%">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Ice Cream</h2>
                <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
              </span>
            </span>
            <img class="img-fluid" src="img/portfolio-2.jpg" alt="", width="100%" >
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Strawberries</h2>
                <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
              </span>
            </span>
            <img class="img-fluid" src="img/portfolio-3.jpg" alt="", width="100%" >
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Workspace</h2>
                <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
              </span>
            </span>
            <img class="img-fluid" src="img/portfolio-4.jpg" alt="", width="100%" >
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="content-section bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">The buttons below are impossible to resist...</h2>
      <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a>
      <a href="#" class="btn btn-xl btn-dark">Look at Me!</a>
    </div>
  </section>

  <!-- Map -->
  <section id="contact" class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.577227504355!2d90.44736141498225!3d23.79806468456591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7d8042caf2d%3A0x686fa3e360361ddf!2sUnited%20International%20University!5e0!3m2!1sen!2sbd!4v1574670298350!5m2!1sen!2sbd" width=100% height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
