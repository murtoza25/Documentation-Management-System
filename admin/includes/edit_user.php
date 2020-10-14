<?php $message=""; ?>

<?php
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
if(isset($_POST['submit'])){
       
  $firstname=(escape($_POST['firstname']));
  $lastname=(escape($_POST['lastname']));
  $email=(escape($_POST['email']));
  $uname=(escape($_POST['username']));
  $pass=(escape($_POST['password']));
  $nid=(escape($_POST['nid']));
  $address=(escape($_POST['address']));
  $mobile=(escape($_POST['mobile']));    
    
    $query="update student set 
firstname='$firstname',
lastname='$lastname',
email='$email',
username='$uname',
password='$pass',
nid='$nid',
address='$address',
mobile_no='$mobile'
                               where id='$user_id'";
    $result=mysqli_query($con,$query);
    if(!$result){
        die("query failed").mysqli_error($con);
    }
    else{
         $query="select * from student where id='$user_id'";
         $res=mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($res)){
            $user_id=escape($row['id']);
             
        }
       header("Location:users.php?source=edit_user&message=User Account Successfully Updated&user_id=$user_id");
    }
    
}


?>


<?php
      
  
      
       $query="select * from student where id='$user_id'";  
           $select_user=mysqli_query($con,$query);
      while($row=mysqli_fetch_assoc($select_user)){
         $id=(escape($row['id'])); 
         $firstname=(escape($row['firstname']));
         $lastname=(escape($row['lastname']));
         $email=(escape($row['email']));
         $uname=(escape($row['username']));
         $pass=(escape($row['password']));
         $nid=(escape($row['nid']));
         $address=(escape($row['address']));
         $mobile=(escape($row['mobile_no']));    
         $status=(escape($row['status']));    
          
        
         
  }
  
          
        
 
           ?>
           
       

<?php if(isset($_GET['message'])){
   $message=escape($_GET['message']);
   
    ?>
    <div class="col-xs-6 " style="text-align:center; margin-left:410px; margin-bottom:20px;background:#A0E8A9;color:#fff; border-radius:10px;width:500px;"  >
    <h2><p style="font-size:15px; margin-top:-10px; "> <?php echo $message; ?> </h2>

</div>
    
<?php } ?>





   
   <div class="col-xs-6 " style="text-align:center; margin-left:250px;"  >
    
    <form method="post" action="" enctype="multipart/form-data" >
    
    
    

  <div class="form-group">
    <label for="firstname">Firstname</label>
    <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>" >
  </div>
  
  <div class="form-group">
    <label for="lastname">Lastname</label>
    <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>" >
  </div>
  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" >
  </div>
  

  
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" value="<?php echo $uname; ?>">
  </div>
  
  <div class="form-group">
    <label for="nid">NID</label>
    <input type="text" class="form-control" name="nid" value="<?php echo $nid; ?>">
  </div>
  
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
  </div>
  
  <div class="form-group">
    <label for="mobile">Mobile NO</label>
    <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>">
  </div>
  
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" value="<?php 
                                                                       echo $pass;
                                                                       
                                                                       ?>">
  </div>
  
  
   
  
  
  <input type="submit" value="Edit User" name="submit" class="btn btn-primary">
</form>
<?php }?>
</div>