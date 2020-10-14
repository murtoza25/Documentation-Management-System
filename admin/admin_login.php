<?php include "includes/db.php"; ?>
<?php session_start(); ?>
<?php include "includes/functions.php"; ?>


<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="../login.css">
    </head>
    <body>

        <div class="loginbox">

            <img src="..\img/avatar2.png" class="avatar">
            <h1> Login here </h1>

            <?php
            
            
            if(isset($_POST['submit'])){
    
   $username=escape($_POST['username']);
   $password=escape($_POST['password']);
    
    $query="select * from admin where admin_username='$username'";
    $res=mysqli_query($con,$query);
    if(!$res){die("query failed").mysqli_error($con);}
    
 
       while($row=mysqli_fetch_assoc($res)){
       $uname=escape($row['admin_username']);
       $pword=escape($row['password']);
      
              
}
    
   
   
   
    
 if($uname!==$username){
        header("Location:admin_login.php?m=incorrect username");
    }  
    
   elseif($pword!==$password){
        header("Location:admin_login.php?m=incorrect password");
    }  

 else{
     $_SESSION['admin_username']=$uname;
     header("Location:index.php");
    
 }


}
            
            
            
             


             ?>
            <form action="admin_login.php" method="post">

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
