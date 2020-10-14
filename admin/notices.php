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
                            Notices
                             <?php
                            if(isset($_GET['source'])){
                                $source=$_GET['source'];
                                if($source=="add_notice"){
                                    echo"<small>Add Notice</small>";  
                                }
                                 elseif($source=="edit_notice"){
                                    echo"<small>Edit Notice</small>";  
                                }
                                else{
                                    echo"<small>List Of Notice</small>";  
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
                                case  'add_notice';
                                    include "includes/add_notice.php";
                                    break;
                                    
                                    case  'edit_notice';
                                    include "includes/edit_notice.php";
                                    break;
                               
                                
                                default : include "includes/view_all_notices.php";
                                    
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