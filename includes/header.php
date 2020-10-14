<?php include "db.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DMS</title>


  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  
  <link href="./cv/main.css" rel="stylesheet" media="all">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
       <link href="./css/font.css" rel="stylesheet" type="text/css">
       
       
       
<link rel="icon" type="image/png" href="./download_table/images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="./download_table/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./download_table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./download_table/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="./download_table/vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="./download_table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="./download_table/css/util.css">
<link rel="stylesheet" type="text/css" href="./download_table/css/main.css">
      
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
      <link href="./search_bar/css/main.css" rel="stylesheet" />
      
      
      <link rel="icon" type="image/png" href="./contact/images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="./contact/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./contact/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="./contact/vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="./contact/vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="./contact/css/util.css">
	<link rel="stylesheet" type="text/css" href="./contact/css/main.css">
       
       

  
  <style>
      
    
   
      .header{
          
          min-height:150px;
          
      }
      .notice{
          text-align: center;
          margin-top: -100px;
         
          width: 50%;
          margin-left: auto;
          margin-right: auto;
         
      }
      
      .notice_head h1{
           background: #FFB75A;
           color: aliceblue;
      }
      .notice_body{
          background: #FFD6A0;
          margin-top: 5px;
          padding: 10px;
          color: #fff;
      }
       .date{
          color: #8A8585;
          
      }
      .notice_body_header{
          color: #9C4040;
      }
      
      

      .news{
          text-align: center;
          margin-top: -100px;
         
          width: 50%;
          margin-left: auto;
          margin-right: auto;
         
      }
      
      .news_head h1{
           background: #C0E177;
           color: aliceblue;
      }
      .news_body{
          background: #C0E177;
          margin-top: 5px;
          padding: 10px;
          color: aliceblue;
      }
       
      .hojo a{
          text-decoration: none;
      }
      
       
          
      .news_body:hover{
          background: #fff;
          color:#C0E177 ;
      }
       .notice_body:hover{
          background: #fff;
          color: orange;
      }
      
    
    
    
    
    </style>
     
</head>

<?php
    if(!isset($_SESSION['username'])){
        header("Location:.\login.php");
        
    }
    
    
    ?>
