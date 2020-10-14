<?php include "includes/db.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "includes/functions.php"; ?>
<?php $submit_msg=""; ?>
<?php $firstname=""; ?>
<?php $lastname=""; ?>
<?php $full_name=""; ?>



 <?php
             if(isset($_GET['stu_id'])){
                 $student_id=$_GET['stu_id'];
                 $query="select * from student where id='$student_id'";
                 $res=mysqli_query($con,$query);
                 while($row=mysqli_fetch_assoc($res)){
                     $id=$student_id;
                     $firstname=$row['firstname'];
                     $lastname=$row['lastname'];
                     $full_name=$firstname." ".$lastname;
                     
                 }
             }
             ?>

 <?php     
              if(isset($_POST['submit'])){
                  date_default_timezone_set("Asia/Dhaka");
                  $date=date("d F,Y h:i:s A");
                  $name=$full_name;
                  $email=$_POST['email'];
                  $message=$_POST['message'];
                  $cv=$_FILES['cv']['name'];
                  $cv_temp=$_FILES['cv']['tmp_name'];
                  $status="unaccepted";
                  move_uploaded_file($cv_temp,"upload/cv/$cv"); 
                  $query="insert into cv(student_name,email,message,file,status,date)values('$name','$email','$message','$cv','$status','$date')";
                  $res=mysqli_query($con,$query);
                  if(!$res){
                  die("query failed").mysqli_error($con);
                                }
                   else{
                        $query="select * from cv";
         $res=mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($res)){
            $the_cv_id=escape($row['id']);
             
        }
       header("Location:cv.php?submit_msg=CV Successfully Submitted&cv_id=$the_cv_id&stu_id=$student_id");
                   }
                  
              }
              
              
              ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply for job</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="cv/main.css" rel="stylesheet" media="all">
    <style>
.button {
    margin-top: -79px;
    margin-bottom: 52px;
    height: 40px;
    width: 88px;
    color: #4E563D;
    background: #DAF771;
    margin-left: 26px;
    border-radius: 22px;
    padding: 10px;
}
        .button p {
    position: absolute;
    left: 43px;
    font-weight: bold;
}
        .button a{
            text-decoration: none;
        }
         .button a hover{
            background: #C70039 ;
        }
    </style>
    
</head>

<body>
 
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
         <div class="button">
         <a href="./"><p>Go Back</p></a>
         </div>
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Apply for job</h2>
                         </div>
                         <div class="card-body">
             <form method="POST" action="" enctype="multipart/form-data">
                 <?php if(isset($_GET['submit_msg'])){
   $submit_msg=escape($_GET['submit_msg']);
   
    ?>
    <div class="col-xs-6 " style="text-align:center; margin-left:200px; margin-bottom:20px;background:#A0E8A9;color:#fff; border-radius:10px;width:500px;padding:10px;"  >
    <h2><p style="font-size:15px;  "> <?php echo $submit_msg; ?>  
        <?php if(isset($_GET['cv_id'])){
         $the_cv_id=escape($_GET['cv_id']);?>
        <a style="color:skyblue;" href="../single_cv.php?single_cv=<?php echo $the_cv_id ?>">View CV</a>
        
   <?php } ?>
        </p>
    </h2>

</div>
    
<?php } ?>
                  
                 <div class="form-row">
          
            
                     <div class="name">Full Name</div>
                     <div class="value">
                         <input disabled class="input--style-6" type="text" name="full_name" value="<?php echo $firstname . " ".$lastname ; ?>">
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="name">Email address</div>
                     <div class="value">
                         <div class="input-group">
                             <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                </div>
            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="Message sent to the employer"></textarea>
                  </div>
              </div>
          </div>
          <div class="form-row">
              <div class="name">Upload CV</div>
              <div class="value">
                  <div class="input-group js-input-file">
                      <input class="input-file" type="file" name="cv" id="file">
                      <label class="label--file" for="file">Choose file</label>
                      <span class="input-file__info">No file chosen</span>
                  </div>
                  <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
              </div>
          </div>
                    <div class="card-footer" >
                    <button style="margin-left:300px;"  class="btn btn--radius-2 btn--blue-2" type="submit" name="submit">Send Application</button>
                </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="cv/vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="cv/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->