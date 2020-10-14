<?php include "includes/header.php"; ?>
<body id="page-top">

 

    <a href="./"><img src="img/bg-callout.jpg" style="float: left;height:150px;"></a>
    <div class="un+logout" style="float: right;
    margin: 0px 12px;
    padding: 0px 78px;
    font-size: 21px;
    margin-top:30px;">
    <p> <?php
      $query="select * from student where username='$_SESSION[username]'";
        $res=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($res)){
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
          
            
        
      echo "<h5>
      Welcome
      <span style='margin-left:10px;padding:5px;color:#fff; background:#A0E8A9;border-radius:10px;'> 
      $firstname $lastname
      </span>
</h5>";
            }
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
        <a class="js-scroll-trigger" href="#files">Documents</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="news.php">News</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  
  <div class="header">
      
  </div>
      <section class="content-section bg-light" >
        
     <div class="container">
          <div class="row">

         
                
            <div class="col-sm-8" style="margin-top:-100px;">
            
                   
                <?php 
                if(isset($_GET['single_notice'])){
                    
              
          
                        $notice_id=$_GET['single_notice'];
                        
    
                        $query="select * from notices where id=$notice_id";
                        $res=mysqli_query($con,$query);
                    if(!$res){
                        die("query failed").mysqli_error($con);
                        
                    }
                        while($row=mysqli_fetch_assoc($res)){
                        $id=escape($row['id']);
                        $date=escape($row['date']);
                        $title=escape($row['title']);
                        $content=escape($row['content']);
                        $status=escape($row['status']);
                        $tags=escape($row['tags']);
                        $image=escape($row['image']);
                        $pdf=escape($row['pdf']);
                        $video=escape($row['video']);
                        $author=escape($row['author']);
          
              
                
                ?>
                
              
                <!-- First Blog Post -->
                <h2>
                    <a href=""  style="color:orange;"><?><?php echo $title ?></a>
                </h2>
                <p class="lead">
                    by <a href=""  style="color:orange;"><?><?php echo $author ?></a>
                </p>
                <p style="margin-bottom:50px;"><span class="glyphicon glyphicon-time" ></span> <?php echo $date ?> </p>
              
                 <div  >
                                     <?php
                if(!empty($image)){
                   ?> <img style="margin-bottom:50px;" width=400  class="img-responsive" src="upload/images/<?php echo $image;?>" alt="image couldn't uploaded">
                <?php }
                
                ?>
                 </div>
                
                                <hr>
                
                <div >
                     <?php
                if(!empty($pdf)){
                    
                    echo "<h3 style='color:orange; margin-bottom:20px;'>pdf file attached here</h3>";
                 
                ?>   <a style="font-weight:bold;font-size:20px;" href="upload/pdf/<?php echo $pdf ?>" target="_blank"><?php echo $pdf; ?></a>
                <?php }  ?>
                
                
                
               
                </div>
                
                
                   <div >
                     <?php
                if(!empty($video)){   
                    echo "<h3 style='color:orange; margin-bottom:20px;'>Video file</h3>";
                ?>  <video style="margin-top:30px;" width="500" heigh="200" controls>
                    <source src="upload/video/<?php echo $video ?>" type="video/mp4">
                </video>
                <?php }  ?>
                
                
                
               
                </div>
                
     
               
              <?php  }  
    
                
                } ?>
                  
            
                
               
                
            </div>
            
              <div class="col-sm-4" style="font-size::0.9vw;font-weight:bold;color:#581845;margin-top:30px;" >
              
      <?php echo $content ?>
                
                  
              </div>



        </div>
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
