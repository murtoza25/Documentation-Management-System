<?php

if(function_exists('escape')){}
else{
    function escape($string){
        global $con;
        return mysqli_real_escape_string($con,trim(strip_tags($string)));
        
    }
}



if(function_exists('insert_categories')){

}
else{
       function insert_categories(){
    global $con;
     if(isset($_POST['submit'])){
              $cat_title=escape($_POST['cat_title']);
             if(empty($cat_title) || $cat_title==""){
                 echo "<h3>must no be empty</h3>";
                 
             }
 
  else{
      
      $insert_query="insert into categories (cat_title) values ('$cat_title')";
      $insert_cat_query=mysqli_query($con,$insert_query);
      if(!$insert_cat_query){
          die("query failed").mysqli_error($con);
          
      }
      
  }
            
                              }  
}
}




if(function_exists('findallcategory')){

}
else{
        function findallcategory(){
    global $con;
     $select_query="select * from categories" ;
            $select_cat_query=mysqli_query($con,$select_query);
             
            
                while($row=mysqli_fetch_assoc($select_cat_query)){
                    $cat_title=escape($row['cat_title']);
                    $cat_id=escape($row['cat_id']);
                    
                
    
            
            
    echo "<tr>
              <th scope='row'>$cat_id</th>
              <td>$cat_title</td>
              <td><a href='categories.php?delete={$cat_id}'>Delete</a></td>
              <td><a href='categories.php?edit={$cat_id}'>Edit</a></td>
        </tr>";
                }
    
}
}

if(function_exists('deletecategory')){
 
}
else{
       function deletecategory(){
     global $con;
    if(isset($_GET['delete'])){
     
                 $id_to_be_delete=escape($_GET['delete']);
                
                $query="delete from categories where cat_id='$id_to_be_delete'";
                $del_res=mysqli_query($con,$query);
        if(!$del_res){
            die("query failed").mysqli_error($con);
            
        }
    else{
        header("Location:categories.php");
    }
}
    
}
}


 















?>