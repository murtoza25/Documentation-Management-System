 <?php  include "functions.php" ; ?>
 <?php  $status=""; ?> <?php  include_once "functions.php" ; ?>




 <form action="" method="post">
    
<div class="col-xs-12">
 
 <table class="table">
  <thead class="thead-dark" style="background:#ddd;">
    <tr>
     
        
        
        <th scope="col">Id</th>
      <th scope="col">File Name</th>
      <th scope="col">File</th>
      <th scope="col">Uploaded Date</th>
      <th scope="col">Status</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
   <?php  $query="select * from files order by id desc";  
           $select_files=mysqli_query($con,$query);
      while($row=mysqli_fetch_assoc($select_files)){
          $id=escape($row['id']);
          $name=escape($row['name']);
          $file=escape($row['file']);
          $date=escape($row['date']);
          $status=escape($row['status']);   
        
          echo "<tr>";
           ?>
           
       
           
           <?php
      echo "<th scope='row'> $id</th>";
          echo "<td>$name</td>";
         if(empty($file)){
                           echo "<td>empty</td>";
                       }
                       else{
                            echo "<td>$file</td>";
                       }
          

          echo "<td>$date</td>";
          echo "<td><a href='files.php?source=&status={$status}&status_id={$id}'>$status</a></td>";
          
          if(isset($_GET['status_id'])){
              
              $status_id=$_GET['status_id'];
              $status=$_GET['status'];
              if($status=="draft"){
                  $query="update files set status='published' where id='$status_id'";
                  $res=mysqli_query($con,$query);
                  header("Location:./files.php?source=");
              }
     
     if($status=="published"){
                  $query="update files set status='draft' where id='$status_id'";
                  $res=mysqli_query($con,$query);
                  header("Location:./files.php?source=");
              }
          }

           



          echo "<td><a href='files.php?source=&del_id={$id}'>Delete</a></td>";
          echo "<td><a href='files.php?source=edit_files&files_id={$id}'>Edit</a></td>";
       
        
          echo "</tr>";
      }
      ?>
 
  </tbody>

</table>
</div>
</form>


<!--delete files -->
<?php
   if(isset($_GET['del_id'])){
       $del_id=$_GET['del_id'];
       $query="delete from files where id='$del_id'";
       $res=mysqli_query($con,$query);
       header("Location:files.php?source=");
       
   }
?>


 