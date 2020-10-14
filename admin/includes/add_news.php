<?php $message=""; ?>

<?php
if(isset($_POST['submit'])){
       date_default_timezone_set("Asia/Dhaka");
       $date=date("d F,Y h:i:s A");
       $title=escape($_POST['title']);
       $content=escape($_POST['content']);
       $status="draft";
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
  
    if($pdf_temp!=null){
         move_uploaded_file($pdf_temp,"../upload/pdf/$pdf"); 
      }
    
     if($video_temp!=null){
         move_uploaded_file($video_temp,"../upload/video/$video"); 
      }
    
    $query="insert into news(date,title,content,status,tags,image,pdf,video,author)values('$date','$title','$content','$status','$tags','$image','$pdf','$video','$author')";
    $result=mysqli_query($con,$query);
    if(!$result){
        die("query failed").mysqli_error($con);
    }
    else{
         $query="select * from news";
         $res=mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($res)){
            $the_news_id=escape($row['id']);
             
        }
       header("Location:news.php?source=add_news&message=News Successfully Created&news_id=$the_news_id");
    }
    
}


?>
<?php if(isset($_GET['message'])){
   $message=escape($_GET['message']);
   
    ?>
    <div class="col-xs-6 " style="text-align:center; margin-left:410px; margin-bottom:20px;background:#A0E8A9;color:#fff; border-radius:10px;width:500px;"  >
    <h2><p style="font-size:15px; margin-top:-10px; "> <?php echo $message; ?>  
        <?php if(isset($_GET['news_id'])){
         $the_news_id=escape($_GET['news_id']);?>
        <a style="color:skyblue;" href="../single_news.php?single_news=<?php echo $the_news_id ?>">View News</a>
        
   <?php } ?>
        </p>
    </h2>

</div>
    
<?php } ?>


   
   <div class="col-xs-6 " style="text-align:center; margin-left:250px;"  >
    
    <form method="post" action="" enctype="multipart/form-data" >
    

  <div class="form-group">
    <label for="title">News Title</label>
    <input type="text" class="form-control" name="title" >
  </div>
  
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" name="author" >
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
     
    <input type="file" style="margin-left:auto;margin-right:auto;padding:20px; background:aliceblue;" name="image">
   
  </div>
  
   <div class="form-group">
    <label for="pdf">Post Pdf</label>
    <input type="file" style="margin-left:auto;margin-right:auto;padding:20px; background:aliceblue;" name="pdf">
   
  </div>
  
   <div class="form-group">
    <label for="video">Post Video</label>
    <input type="file" style="margin-left:auto;margin-right:auto;padding:20px; background:aliceblue;" name="video">
   
  </div>
  
  <div class="form-group">
    <label for="tags">News Tags</label>
    <input type="text" class="form-control" name="tags">
  </div>
  
  <div class="form-group">
    <label for="content">News Content</label>
    <textarea name="content" id=""></textarea>
  </div>
  
   
  
  
  <input type="submit" value="Add News" name="submit" class="btn btn-primary">
</form>
</div>