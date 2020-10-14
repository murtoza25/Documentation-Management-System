<?php

include "includes/db.php";
include "includes/functions.php";
?>
<?php
$fname="";
$lname="";
$em="";
$un="";
$p="";
$message="";
if(isset($_POST['submit'])){
  $firstname=(escape($_POST['firstname']));
  $lastname=(escape($_POST['lastname']));
  $email=(escape($_POST['email']));
  $uname=(escape($_POST['username']));
  $pass=(escape($_POST['password']));
  $nid=(escape($_POST['nid']));
  $address=(escape($_POST['address']));
  $mobile=(escape($_POST['mobile_no']));    
  $status="unconfirmed";    

  if($firstname==null || $lastname==null || $email==null || $uname==null || $pass==null ){
        if($firstname==null){$fname="field must not be empty";}
        if($lastname==null){$lname="field must not be empty";}
        if($email==null){$em="field must not be empty";}
        if($uname==null){$un="field must not be empty";}
        if($pass==null){$p="field must not be empty";}
  }
else{
  $query="insert into student(firstname,lastname,email,username,password,nid,address,mobile_no,status)values('$firstname','$lastname','$email','$uname','$pass','$nid','$address','$mobile','$status')";
  $res=mysqli_query($con,$query);
  if(!$res){
      die("query failed").mysqli_error($con);
  }
    else{
        header("Location:signup.php?message=Account Successfully Created");
    }
}
}

 ?>



<html>
<head>
    <title> Signup </title>
    <link rel="stylesheet" type="text/css" href="login.css">
  
    </head>
    <body>

     <div class="row">
          <div class="col-sm-6">dfgfdg</div>
           <div class="col-sm-6">
            <div class="loginboxx" >

            <img src="img/avatar2.png" class="avatar">
            <?php
                if(isset($_GET['message'])){
                    $message=$_GET['message'];
                     echo"<h1 style='color:#A0E8A9;'> {$message}</h1>" ;
                }
                else{
                   echo"<h1> Create an account here </h1>" ;
                }
                
                ?>
            <form action="signup.php" method="post">

                <p> First Name: </p> <span style="color:red"> <?php echo $fname; ?></span> <input type="text" name="firstname" placeholder="Enter Firstname">
                <p> Last Name: </p> <span style="color:red"> <?php echo $lname; ?></span> <input type="text" name="lastname" placeholder="Enter Lastname">
                <p>Email: </p>  <span style="color:red"> <?php echo $em; ?></span> <input type="text" name="email" placeholder="Enter Email">
                  <p>NID: </p>  <span style="color:red"> <?php echo $em; ?></span> <input type="text" name="nid" placeholder="Enter NID">
                  <p>Address: </p>  <span style="color:red"> <?php echo $em; ?></span> <input type="text" name="address" placeholder="Enter Address">
                  <p>Mobile No: </p>  <span style="color:red"> <?php echo $em; ?></span> <input type="text" name="mobile_no" placeholder="Enter Mobile No">
                <p>Username: </p>  <span style="color:red"> <?php echo $un; ?></span> <input type="text" name="username" placeholder="Enter Username">
                <p> Password: </p> <span style="color:red"> <?php echo $p; ?></span> <input type="password" name="password" placeholder="Enter Password:">

              <input type="submit" name="submit" placeholder="Login">


            </form>
        </div>
       </div>
     </div>



    </body>
</html>
