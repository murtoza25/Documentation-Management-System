 <?php  include_once "functions.php" ; ?>
<!--delete cv -->
<?php
   if(isset($_GET['del_id'])){
       $del_id=$_GET['del_id'];
       $query="delete from cv where id='$del_id'";
       $res=mysqli_query($con,$query);
       header("Location:cv.php?source=");
       
   }
?>



 <form action="" method="post">
     


    
     
<div class="col-xs-12">
 
 <table class="table">
  <thead class="thead-dark" style="background:#ddd;">
    <tr>
     
        
        
      <th scope="col">Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">File</th>
      <th scope="col">Submitted Date</th>
      <th scope="col">CV Status</th>
      <th scope="col">Delete</th>
     
     
    </tr>
  </thead>
  <tbody>
   <?php  $query="select * from cv order by id desc";  
           $select_cv=mysqli_query($con,$query);
      while($row=mysqli_fetch_assoc($select_cv)){
          $id=escape($row['id']);
          
          $student_id=escape($row['student_name']);
           $email=escape($row['email']);
          $message=escape(substr($row['message'],0,50));
         
          $date=$row['date'];
          $file=escape($row['file']);
          $status=escape($row['status']);
          
          
        
          echo "<tr>";
           ?>
           
       
           
           <?php
          echo "<th scope='row'> $id</th>";
          echo "<td>$student_id</td>";
          echo "<td>$email</td>";
          echo "<td>$message</td>";
             
           if(empty($file)){
                           echo "<td>empty</td>";
                       }
                       else{
      
                                  
                                  ?>
                              <td ><a style="color:yellowgreen;text-decoration:none" href="../upload/cv/<?php echo $file; ?>" target="_blank"><?php echo $file; ?></a></td>
          <?php             }
            echo "<td>$date</td>";

          echo "<td><a href='cv.php?source=&accept_cv_id={$id}'>$status</a></td>";
          
   

 if(isset($_GET['accept_cv_id'])){
              
              $accept_cv_id=$_GET['accept_cv_id'];
              if($status=="unaccepted"){
                  $query="update cv set status='accepted' where id='$accept_cv_id'";
                  $res=mysqli_query($con,$query);
                  header("Location:cv.php?source=");
              }
     
     if($status=="accepted"){
                  $query="update cv set status='unaccepted' where id='$accept_cv_id'";
                  $res=mysqli_query($con,$query);
                  header("Location:cv.php?source=");
              }
          }



          
         
       
    
          echo "<td><a href='cv.php?source=&del_id={$id}'>Delete</a></td>";
        
       
        
          echo "</tr>";
      }
      ?>
      
      
      
      
    
    
   
   
  </tbody>

</table>
</div>
</form>

