 <?php  include "functions.php" ; ?>
 <?php  $status=""; ?> <?php  include_once "functions.php" ; ?>




 <form action="" method="post">
    
<div class="col-xs-12">
 
 <table class="table">
  <thead class="thead-dark" style="background:#ddd;">
    <tr>
     
        
        
      <th scope="col">Id</th>
      <th scope="col">Date</th>
      <th scope="col">Ttile</th>
      <th scope="col">Content</th>
      <th scope="col">Status</th>
      <th scope="col">Tags</th>
      <th scope="col">Image</th>
      <th scope="col">Pdf</th>
      <th scope="col">Video</th>
      <th scope="col">Author</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
   <?php  $query="select * from notices order by id desc";  
           $select_notice=mysqli_query($con,$query);
      while($row=mysqli_fetch_assoc($select_notice)){
         $id=escape($row['id']);
          $date=escape($row['date']);
          $title=escape($row['title']);
          $content=escape(substr($row['content'],0,50));
          $status=escape($row['status']);
          $tags=escape($row['tags']);
          $image=escape($row['image']);
          $pdf=escape($row['pdf']);
          $video=escape($row['video']);
          $author=escape($row['author']);
        
          echo "<tr>";
           ?>
           
       
           
           <?php
        echo "<th scope='row'> $id</th>";
          echo "<td>$date</td>";
          echo "<td>$title</td>";
          echo "<td>$content</td>";
          echo "<td><a href='notices.php?source=&status={$status}&status_id={$id}'>$status</a></td>";
          
          if(isset($_GET['status_id'])){
              
              $status_id=$_GET['status_id'];
              $status=$_GET['status'];
              if($status=="draft"){
                  $query="update notices set status='published' where id='$status_id'";
                  $res=mysqli_query($con,$query);
                  header("Location:./notices.php?source=");
              }
     
     if($status=="published"){
                  $query="update notices set status='draft' where id='$status_id'";
                  $res=mysqli_query($con,$query);
                  header("Location:./notices.php?source=");
              }
          }

           


           echo "<td> $tags</td>";
        
         
             
           if(empty($image)){
                           echo "<td>empty</td>";
                       }
                       else{
                             echo "<td><img width='100' src='../upload/images/$image' alt='image'></td>";
                       }
          
          
                       if(empty($pdf)){
                           echo "<td>empty</td>";
                       }
                       else{
                            echo "<td>$pdf</td>";
                       }
          
           if(empty($video)){
                           echo "<td>empty</td>";
                       }
                       else{
                             echo "<td>$video</td>";
                       }
          

         
          echo "<td>$author</td>";
          echo "<td><a href='notices.php?source=&del_id={$id}'>Delete</a></td>";
          echo "<td><a href='notices.php?source=edit_notice&notice_id={$id}'>Edit</a></td>";
       
        
          echo "</tr>";
      }
      ?>
 
  </tbody>

</table>
</div>
</form>


<!--delete notice -->
<?php
   if(isset($_GET['del_id'])){
       $del_id=$_GET['del_id'];
       $query="delete from notices where id='$del_id'";
       $res=mysqli_query($con,$query);
       header("Location:notices.php?source=");
       
   }
?>



