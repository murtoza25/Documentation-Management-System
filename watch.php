<?php

if (isset($GET['id'])) {
  $id=$_GET['id'];
  $query="select vid_name from vid_up where id=$id";
  $result=$db->select($query);
  if($result=!false){
    $value=mysqli_fetch_array($result);
    $row=mysqli_num_rows($result);
    if($row>0){
      $name=$row['vid_name'];
    }
    echo "you are watching ".$name."<br>"
    echo "<video width='500' controls><source src='upload/".$name."' type='video/webm'></video>";
  }
}

 ?>
