<?php include "db.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "functions.php"; ?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="./js/jquery.js"></script>
      <script src="./js/script.js"></script>
  <script src="../ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<?php
    if(!isset($_SESSION['admin_username'])){
        header("Location:.\admin_login.php");
        
    }
    
    ?>
