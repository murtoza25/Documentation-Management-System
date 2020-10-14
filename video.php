<?php
include "session.php";
session::checksession();
?>

<?php
include "config.php";
include "database.php";
?>
<?php   $db=new database(); ?>
<div class="un+logout" style="float: right;
margin: 0px 12px;
padding: 0px 78px;
font-size: 21px;">
<p> <?php
  $data = mysqli_query ($db->link,"select * from admin where  username='$_SESSION[user]'");
  $name=mysqli_fetch_array($data);
  echo "<h5><span style='color:#61A300; margin:1px 3px;'>$name[firstname] $name[lastname]</span></h5>";
     ?>
      <a href="upload.php" style="margin:0px 34px;" >Back</a> <br>
      <a href="?action=logout"style="margin:0px 34px;" >logout</a>
   </p>

 </div>

<?php

$query="select * from vid_up";
$result=$db->select($query);
if($result!=false){
  $value=mysqli_fetch_array($result);
  $row=mysqli_num_rows($result);
  if($row>0){
    $id=$row['id'];
    $name=$row['vid_name'];
    echo "<a href='watch.php?id=$id'>$name</a><br>";
  }
}


 ?>
