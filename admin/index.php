<?php include "includes/header.php"; ?>
       
    <?php include "includes/navigation.php"; ?>
        <body>
     
    <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Hello Admin
                            <small><?php
                                
                                $query="select * from admin where admin_username='$_SESSION[admin_username]'";
                                $res=mysqli_query($con,$query);
                                while($row=mysqli_fetch_assoc($res)){
                                    $firstname=$row['firstname'];
                                    $lastname=$row['lastname'];
                                    
                                    echo "$firstname" . " " . "$lastname";
                                    
                                }
                                
                                ?></small>
                            
                            
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->
                
<!--  admin widget row    -->
            <?php include "admin_widgets.php" ?>
            <div class="row" >
                <?php include "google_chart.php"; ?>
            </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/footer.php"; ?>