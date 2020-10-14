<?php
include "session.php";
session::checksession();
?>

<?php
include "config.php";
include "database.php";
?>
<?php   $db=new database(); ?>



<html>
<head>
    <title> Upload </title>
    <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
      <?php
             if(isset($_GET['action']) && $_GET['action']=="logout" ){
                   session::destroy();
             }


         ?>
      <div class="un+logout" style="float: right;
      margin: 0px 12px;
      padding: 0px 78px;
      font-size: 21px;">
      <p> <?php
       $name="$_SESSION[user]";
        $data = mysqli_query ($db->link,"select * from admin where  username='$_SESSION[user]'");
        $name=mysqli_fetch_array($data);
        echo "<h5><span style='color:#61A300; margin:1px 3px;'>$name[firstname] $name[lastname]</span></h5>";
           ?>
            <a href="index_admin.php" style="margin:0px 34px;" >Back</a> <br>
            <a href="?action=logout"style="margin:0px 34px;" >logout</a>
         </p>

       </div>

        <div class="loginbox" style="height: 520">

            <img src="img/avatar2.png" class="avatar">
            <h1> Upload File </h1>




             <?php
             $ename="";
                  if ($_SERVER["REQUEST_METHOD"]=="POST"){
                      $filename=$_POST['filename'];
                            if($filename==null){ $ename="enter a file name";}
                        else{
                              if ($_POST['filetype']=="image") {
                              $permitted=array('jpg','jpeg','png','gif');
                              $file_name=$_FILES['file']['name'];
                              $file_size=$_FILES['file']['size'];
                              $file_temp=$_FILES['file']['tmp_name'];
                              $div=explode('.',$file_name);
                              $file_ext=strtolower(end($div));
                              $unique_image=substr(md5(time()),0,10).'.'.$file_ext;
                              $uploaded_img="upload/".$unique_image;
                              move_uploaded_file($file_temp,$uploaded_img);

                              $query="insert into img_up(image) values('$filename')";
                              $insert_row=$db->insert($query);
                              if($insert_row){
                                 header("Location: upload.php?msg=".urlencode('upload successfully!'));
                                             }
                                           
                                        }

                                        if ($_POST['filetype']=="doc") {
                              $permitted=array('pdf','pptx','ppt');
                              $file_name=$_FILES['file']['name'];
                              $file_size=$_FILES['file']['size'];
                              $file_temp=$_FILES['file']['tmp_name'];
                              $div=explode('.',$file_name);
                              $file_ext=strtolower(end($div));
                              $unique_doc=substr(md5(time()),0,10).'.'.$file_ext;
                              $uploaded_doc="upload/".$unique_doc;
                              move_uploaded_file($file_temp,$uploaded_doc);
                              $query="insert into doc_up(doc) values('$filename')";
                              $insert_row=$db->insert($query);


                              if($insert_row){
                                  header("Location: upload.php?msg=".urlencode('upload successfully!'));
                                             }

                                                         }


                                                         if ($_POST['filetype']=="video") {
                                                        $permitted=array('mp4');
                                                        $file_name=$_FILES['file']['name'];
                                                        $file_size=$_FILES['file']['size'];
                                                        $file_temp=$_FILES['file']['tmp_name'];
                                                        $div=explode('.',$file_name);
                                                        $file_ext=strtolower(end($div));
                                                        $unique_vid=substr(md5(time()),0,10).'.'.$file_ext;
                                                        $uploaded_vid="upload/".$unique_vid;
                                                        move_uploaded_file($file_temp,$uploaded_vid);

                                                        $query="insert into vid_up(video) values('$filename')";
                                                        $insert_row=$db->insert($query);
                                                        if($insert_row){
                                                            header("Location: upload.php?msg=".urlencode('upload successfully!'));
                                                                       }

                                                                                      }


                        if($_POST['filetype']!="image" || $_POST['filetype']!="video" || $_POST['filetype']!="doc"){
                          header("Location: upload.php?msg=".urlencode('select file format to upload!'));
                                            }}
                                 }


          ?>

            <form action="upload.php" method="post" enctype="multipart/form-data" >

                <p> Authorisation: </p> <span style="color:red"> <?php echo $ename; ?></span>
                <input type="text" name="filename" placeholder="Enter File Name">
                <b> <u> Choose the format: </u>  </b> <br> <br>


               Image<input type="radio" name="filetype" value="image">

               Video<input type="radio" name="filetype" value="video">

               Document<input type="radio" name="filetype" value="doc" > <br>

                        <b> Your File:</b>  <br> <br>
               <input type="file" id="file" name="file" >

               <input type="submit" name="submit" value="Upload">



            </form>

        </div>



    </body>
</html>
