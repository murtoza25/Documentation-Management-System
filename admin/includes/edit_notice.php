<?php $message=""; ?>

<?php
if(isset($_GET['notice_id'])){
    $notice_id=$_GET['notice_id'];
if(isset($_POST['submit'])){
       date_default_timezone_set("Asia/Dhaka");
       $date=date("d F,Y h:i:s A");
       $title=escape($_POST['title']);
       $content=escape($_POST['content']);
       $tags=escape($_POST['tags']);
       $author=escape($_POST['author']);
       $image=$_FILES['image']['name'];
       $image_temp=$_FILES['image']['tmp_name'];
       $pdf=$_FILES['pdf']['name'];
       $pdf_temp=$_FILES['pdf']['tmp_name'];
       $video=$_FILES['video']['name'];
       $video_temp=$_FILES['video']['tmp_name'];
    
    
    
    
    
      
      
    
      if($image_temp!=null){
         move_uploaded_file($image_temp,"../upload/images/$image"); 
      }
    else{
        
                      if(empty($image)){
                                
                              $query="select * from notices where id='$notice_id'";
                              $res=mysqli_query($con,$query);
                              if(!$res){
                                  echo "query failed".mysqli_error($con);
                              }
                            while($row=mysqli_fetch_assoc($res)){
                                $image=escape($row['image']);
                            }
                             
                         }
    }
    
    if($pdf_temp!=null){
         move_uploaded_file($pdf_temp,"../upload/pdf/$pdf"); 
      }
    else{
        
                      if(empty($pdf)){
                                
                              $query="select * from notices where id='$notice_id'";
                              $res=mysqli_query($con,$query);
                              if(!$res){
                                  echo "query failed".mysqli_error($con);
                              }
                            while($row=mysqli_fetch_assoc($res)){
                                $pdf=escape($row['pdf']);
                            }
                             
                         }
    }
    
     if($video_temp!=null){
         move_uploaded_file($video_temp,"../upload/video/$video"); 
      }
    else{
        
                      if(empty($video)){
                                
                              $query="select * from notices where id='$notice_id'";
                              $res=mysqli_query($con,$query);
                              if(!$res){
                                  echo "query failed".mysqli_error($con);
                              }
                            while($row=mysqli_fetch_assoc($res)){
                                $video=escape($row['video']);
                            }
                             
                         }
    }
    
    $query="update notices set title='$title',
                               author='$author',
                               image='$image',
                               pdf='$pdf',
                               video='$video',
                               tags='$tags',
                               content='$content'
                               where id='$notice_id'";
    $result=mysqli_query($con,$query);
    if(!$result){
        die("query failed").mysqli_error($con);
    }
    else{
         $query="select * from notices where id='$notice_id'";
         $res=mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($res)){
            $notice_id=escape($row['id']);
             
        }
       header("Location:notices.php?source=edit_notice&message=Notice Successfully Updated&notice_id=$notice_id");
    }
    
}


?>


<?php
      
  
      
       $query="select * from notices where id='$notice_id'";  
           $select_notices=mysqli_query($con,$query);
      while($row=mysqli_fetch_assoc($select_notices)){
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
          
        
         
  }
  
          
        
 
           ?>
           
       

<?php if(isset($_GET['message'])){
   $message=escape($_GET['message']);
   
    ?>
    <div class="col-xs-6 " style="text-align:center; margin-left:410px; margin-bottom:20px;background:#A0E8A9;color:#fff; border-radius:10px;width:500px;"  >
    <h2><p style="font-size:15px; margin-top:-10px; "> <?php echo $message; ?>  
        <?php if(isset($_GET['notice_id'])){
         $the_notice_id=escape($_GET['notice_id']);?>
        <a style="color:skyblue;" href="../single_notice.php?single_notice=<?php echo $notice_id;?>">View Notice</a>
        
   <?php } ?>
        </p>
    </h2>

</div>
    
<?php } ?>





   
   <div class="col-xs-6 " style="text-align:center; margin-left:250px;"  >
    
    <form method="post" action="" enctype="multipart/form-data" >
    
    
    

  <div class="form-group">
    <label for="title">Notice Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $title; ?>" >
  </div>
  
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" name="author" value="<?php echo $author; ?>" >
  </div>
  
  
  
<!--
  <div class="form-group">
    <label for="post_author">Post Author</label>
     <select name="post_author" id="" class="form-control" >
-->
       
      <?php
       
                    /*       $query="select * from users where user_role='admin'";
                           $select_user=mysqli_query($con,$query);
                           if(!$select_user){echo "query failed".mysqli_error($con);}
                           while($row=mysqli_fetch_assoc($select_user)){
                               
                               $user_id=escape($row['user_id']);
                               $username=escape($row['username']);
                           
                           echo "<option value='$username'>{$username}</option>";
                           }
       */
       ?> 
       
       
       
       
<!--
   </select>
  </div>
-->
  
  
  
  

  
  <div class="form-group">
    <label for="image">Post Image</label>
    <div class="row">
         <?php if(!empty($image)){
           ?> <img width=100 src="..\upload/images/<?php echo $image; ?>" alt="no image">
           
       <?php } ?>
    </div>
    <input type="file" style="margin-left:auto;margin-right:auto;padding:20px; background:aliceblue;" name="image" value="<?php echo $image;  ?>">
   
  </div>
  
   <div class="form-group">
    <label for="pdf">Post Pdf</label>
    <div class="row">
        <h3><?php echo $pdf; ?></h3>
    </div>
    
    <input type="file" style="margin-left:auto;margin-right:auto;padding:20px; background:aliceblue;" name="pdf" value="<?php echo $pdf; ?>">
   
  </div>
  
   <div class="form-group">
    <label for="video">Post Video</label>
      <div class="row">
           <?php if(!empty($video)){
           ?>  <video width=100 controls >
               <source src="../upload/video/<?php echo $video;?>">
           </video>
           
       <?php  } ?>
       
      </div>
    
    <input type="file" style="margin-left:auto;margin-right:auto;padding:20px; background:aliceblue;" name="video" value="<?php echo $video; ?>">
   
  </div>
  
  <div class="form-group">
    <label for="tags">Notice Tags</label>
    <input type="text" class="form-control" name="tags" value="<?php echo $tags; ?>">
  </div>
  
  <div class="form-group">
    <label for="content">Post Content</label>
    <textarea class="form-control" name="content" rows="10"  id="body" ><?php echo $content; ?></textarea>
  </div>
  
   
  
  
  <input type="submit" value="Edit Notice" name="submit" class="btn btn-primary">
</form>
<?php }?>
</div>