<?php $message=""; ?>

<?php
if(isset($_POST['submit'])){
       date_default_timezone_set("Asia/Dhaka");
       $date=date("d F,Y h:i:s A");
       $name=escape($_POST['name']);
       $status="draft";
       $file=$_FILES['file']['name'];
       $file_temp=$_FILES['file']['tmp_name'];
      
      
    
   
    
     if($file_temp!=null){
         move_uploaded_file($file_temp,"../upload/files/$file"); 
      }
    
    $query="insert into files(name,file,date,status)values('$name','$file','$date','$status')";
    $result=mysqli_query($con,$query);
    if(!$result){
        die("query failed").mysqli_error($con);
    }
    else{
         $query="select * from files";
         $res=mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($res)){
            $the_file_id=escape($row['id']);
             
        }
       header("Location:files.php?source=add_file&message=File Successfully Created&file_id=$the_file_id");
    }
    
}


?>
<?php if(isset($_GET['message'])){
   $message=escape($_GET['message']);
   
    ?>
    <div class="col-xs-6 " style="text-align:center; margin-left:410px; margin-bottom:20px;background:#A0E8A9;color:#fff; border-radius:10px;width:500px;"  >
    <h2><p style="font-size:15px; margin-top:-10px; "> <?php echo $message; ?>  
       
        </p>
    </h2>

</div>
    
<?php } ?>


   
   <div class="col-xs-6 " style="text-align:center; margin-left:250px;"  >
    
    <form method="post" action="" enctype="multipart/form-data" >
    

  <div class="form-group">
    <label for="title">File Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  
  
  
   <div class="form-group">
    <label for="image">Add File</label>
     
    <input type="file" style="margin-left:auto;margin-right:auto;padding:20px; background:aliceblue;" name="file">
   
  </div>
  
  
  
  
  
  
  <input type="submit" value="Add File" name="submit" class="btn btn-primary">
</form>
</div>