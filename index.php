<?php include "includes/header.php"; ?>

<body id="page-top">

    <a href=""><img src="img/bg-callout.jpg" style="float: left;height:150px;"></a>
    <div class="un+logout" style="float: right;
    margin: 0px 12px;
    padding: 0px 78px;
    font-size: 21px;
    margin-top:30px;">
    <?php
         $query="select * from student where username='$_SESSION[username]'";
                                $res=mysqli_query($con,$query);
                                while($row=mysqli_fetch_assoc($res)){
                                    $firstname=$row['firstname'];
                                    $lastname=$row['lastname'];                
                                    
                                }
        
        ?>
    
    <p> <?php
      echo "<h5>Welcome<span style='margin-left:10px;padding:5px;color:#fff; background:#A0E8A9;border-radius:10px;'> $firstname $lastname
</span></h5>";
         ?>
          <a href="logout.php"style="color:#fff;border-radius:10px;margin-left:60px;margin-top:-20px; position:absolute;top:85px;background:#A0E8A9;padding:5px;background:#FFB75A;font-size:15px;" >logout</a>
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
        <a class="js-scroll-trigger" href="index.php">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="notices.php">Notices</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="download.php">Files To Download</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="news.php">News</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="contact.php">Contact</a>
      </li>
      
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#cv">Submit CV</a>
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
  <div class="row">
       <div class="col-sm-12">
          <section class="content-section bg-light" id="news" >
        
         <div class="news">
    <div class="news_head">
        <h1>News</h1>  
    </div>
    <?php
    $query="select * from news where status='published' limit 5 ";
    $res=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($res)){
        $id=$row['id'];
        $date=$row['date'];
        $title=$row['title'];
         
             
    ?>
    
   <div class="hojo">
        <a class="" href="single_news.php?single_news=<?php echo $id ; ?>">
        <div class="news_body">
        <p class="date"><?php echo $date ; ?></p>
        <p class=""><?php echo $title; ?></p>
    </div>
    </a>
   </div>
    <?php } ?>
    
    <a class="news_link" href="news.php" style="text-decoration:none">
        <div class="news_body" style="width:250px;padding:10px; margin-left:350px; border-radius:20px;margin-top:30px;">
        + See More
    </div>
    </a>
    
</div>
    </section>
     </div>
  </div>
  
    <section class="content-section  text-white text-center" id="services" style="background:#85C1E9 
;margin-top:50px;">
    <div class="container"  >
      <div class="content-section-heading" >
        <h3 class="text-secondary mb-0">Services</h3>
        <h2 class="mb-5">Notices</h2>
      </div>
      <div class="row" style="margin-left:350px;">

      
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fas fa-file-download"></i>

          </span>
          <h4>
             <a class="btn btn-dark btn-xl js-scroll-trigger"  href="download.php",  style="color: orange">Download Files</a>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fas fa-newspaper"></i>

          </span>
          <h4>
            <a class="btn btn-dark btn-xl js-scroll-trigger"  href="#notices",  style="color: orange"> Current Notices </a>

          </h4>
        </div>
      </div>
    </div>
  </section>
  
    

  <!-- About -->
  <section class="content-section bg-light" id="about" >
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
  
  
   <div class="row">
     <div class="col-sm-12">
            <section class="content-section bg-light" id="notices" >
        
         <div class="notice">
    <div class="notice_head">
        <h1>Notices</h1>  
    </div>
    <?php
    $query="select * from notices where status='published' limit 5 ";
    $res=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($res)){
        $id=$row['id'];
        $date=$row['date'];
        $title=$row['title'];
         
             
    ?>
    
  <div class="hojo">
        <a class="notice_link" href="single_notice.php?single_notice=<?php echo $id ; ?>">
        <div class="notice_body">
        <p class="date"><?php echo $date ; ?></p>
        <p class="notice_body_header"><?php echo $title; ?></p>
    </div>
    </a>
  </div>
    <?php } ?>
    
    <a class="notice_link" href="notices.php" style="text-decoration:none;">
        <div class="notice_body" style="width:250px;padding:10px; margin-left:350px; border-radius:20px;margin-top:30px;">
        + See More
    </div>
    </a>
    
</div>
    </section>
     </div>
    
     
 </div>
  
  




  <!-- Callout -->
  <section class="callout" id="cv">
    <div class="container text-center">
      <h2 class="mx-auto mb-5">Apply for
        <em>CDIP</em>
      </h2>
        <?php $query="select * from student where id='$_SESSION[id]' ";
                                 $res=mysqli_query($con,$query);
                            if(!$res){
                                die("query faile").mysqli_error($con);
                                
                            }
                                 while($row=mysqli_fetch_assoc($res)){
                                     $id=$row['id'];
                                     $firstname=$row['firstname'];
                                     $lastname=$row['lastname'];
                                     
                                 }
                            ?>
      <a class="btn btn-primary btn-xl" href="cv.php?stu_id=<?php echo $id;  ?>">SUBMIT CV!</a>
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
