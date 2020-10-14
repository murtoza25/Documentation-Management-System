 <?php  include_once "functions.php" ; ?>

<!--delete user -->
<?php
   if(isset($_GET['del_id'])){
       $del_id=$_GET['del_id'];
       $query="delete from student where id='$del_id'";
       $res=mysqli_query($con,$query);
       header("Location:users.php?source=");
       
   }
?>
<?php

?>

 <form action="" method="post">
    
<div class="col-xs-12">
 
 <table class="table">
  <thead class="thead-dark" style="background:#ddd;">
    <tr>
     
        
        
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">NID</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Status</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
     
    </tr>
  </thead>
  <tbody>
   <?php  $query="select * from student order by id desc";  
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
           
        
          echo "<tr>";
           ?>
           
       
           
           <?php
          echo "<th scope='row'> $id</th>";
          echo "<td>$firstname</td>";
          echo "<td>$lastname</td>";
          echo "<td>$email</td>";
          echo "<td> $uname</td>";
          echo "<td>$nid</td>";
          echo "<td>$address</td>";
          echo "<td>$mobile</td>";
          echo "<td><a href='users.php?source=&status={$status}&status_id={$id}'>$status</a></td>";
          
          if(isset($_GET['status_id'])){
              
              $status_id=$_GET['status_id'];
              $status=$_GET['status'];
              if($status=="unconfirmed"){
                  $query="update student set status='confirmed' where id='$status_id'";
                  $res=mysqli_query($con,$query);
                  header("Location:./users.php?source=");
              }
     
     if($status=="confirmed"){
                  $query="update student set status='unconfirmed' where id='$status_id'";
                  $res=mysqli_query($con,$query);
                  header("Location:./users.php?source=");
              }
          }

           


          echo "<td><a href='users.php?source=&del_id={$id}'>Delete</a></td>";
          echo "<td><a href='users.php?source=edit_user&user_id={$id}'>Edit</a></td>";
         
       
        
          echo "</tr>";
      }
      ?>
 
  </tbody>

</table>
</div>
</form>

