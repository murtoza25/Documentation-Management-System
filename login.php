<?php include "includes/db.php"; ?>
<?php session_start(); ?>
<?php include "includes/functions.php"; ?>
<?php $unconfirm_message="";?>


<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <style >
      .loginbox{height:412px;}
    </style>
    </head>
    <body>

        <div class="loginbox">

            <img src="img/avatar2.png" class="avatar">
            <h1> Login here </h1>

                   <?php
            
            
            if(isset($_POST['submit'])){
    
   $username=escape($_POST['username']);
   $password=escape($_POST['password']);
    
    $query="select * from student where username='$username'";
    $res=mysqli_query($con,$query);
    if(!$res){die("query failed").mysqli_error($con);}
    
 
       while($row=mysqli_fetch_assoc($res)){
       $id=escape($row['id']);       
       $status=escape($row['status']);       
       $uname=escape($row['username']);
       $pword=escape($row['password']);
      
      
              
}
    
   
   
   
    
 if($uname!==$username){
        header("Location:login.php?m=incorrect username");
    }  
    
   elseif($pword!==$password){
        header("Location:login.php?m=incorrect password");
    }  

 else{
     if($status=="unconfirmed"){
         $unconfirm_message="Still request not approved by the admin ";
         
     }
     else{
         $_SESSION['username']=$uname;
      $_SESSION['id']=$id;
     header("Location:index.php");
     }
    
 }


}
            
            
            
             


             ?>
           
            <form action="login.php" method="post">
                
                <p><?php echo $unconfirm_message;?></p>

                <p> User name: </p> 
                <input type="text" name="username" placeholder="Enter Username">
                <p> Password: </p> 
              <input type="password" name="password" placeholder="Enter Password:">
              <input type="submit" name="submit" placeholder="Login">

                <a href="#"> Lost your password? </a> <br>
                <a href="signup.php"> Don't have an account? </a> <br>

            </form>
        </div>



    </body>
</html>
