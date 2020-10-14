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
                            Users
                             <?php
                            if(isset($_GET['source'])){
                                $source=$_GET['source'];
                               if($source=="edit_user"){
                                    echo"<small>Edit User</small>";  
                                }
                                else{
                                    echo"<small>List Of Users</small>";  
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
                               
                                    
                                    case  'edit_user';
                                    include "includes/edit_user.php";
                                    break;
                                    
                                     case  'view_unconfirmed_user';
                                    include "includes/view_unconfirmed_user.php";
                                    break;
                               
                                
                                default : include "includes/view_all_users.php";
                                    
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