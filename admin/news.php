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
                            News
                             <?php
                            if(isset($_GET['source'])){
                                $source=$_GET['source'];
                                if($source=="add_news"){
                                    echo"<small>Add News</small>";  
                                }
                                 elseif($source=="edit_news"){
                                    echo"<small>Edit News</small>";  
                                }
                                else{
                                    echo"<small>List Of News</small>";  
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
                                case  'add_news';
                                    include "includes/add_news.php";
                                    break;
                                    
                                    case  'edit_news';
                                    include "includes/edit_news.php";
                                    break;
                               
                                
                                default : include "includes/view_all_news.php";
                                    
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