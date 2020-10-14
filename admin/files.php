<?php include "includes/header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Files
                             <?php
                            if(isset($_GET['source'])){
                                $source=$_GET['source'];
                               if($source=="edit_file"){
                                    echo"<small>Edit File</small>";  
                                }
                                else{
                                    echo"<small>List Of Files</small>";  
                                }
                            }
                           
                            
                            
                            ?>
                        </h1>
                        
                       <?php
                        
                        if(isset($_GET['source'])){
                            $source=$_GET['source'];
                        }
                        else{
                            $source='';
                        }
                            
                            switch($source){
                               
                                    
                                    case  'edit_file';
                                    include "includes/edit_file.php";
                                    break;
                                    
                                     case  'add_file';
                                    include "includes/add_files.php";
                                    break;
                               
                                
                                default : include "includes/view_all_files.php";
                                    
                                    break;
                                        
                            
                            
                        }
                        
                        
                        
                        
                        ?>

                        
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/footer.php"; ?>