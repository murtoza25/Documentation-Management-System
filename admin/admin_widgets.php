       
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php  $query="select * from notices order by id desc";  
           $select_notices=mysqli_query($con,$query);
           $count_notice=mysqli_num_rows($select_notices);
          
            ?>
                  <div class='huge'><?php echo $count_notice; ?></div>
                        <div>Notices</div>
                    </div>
                </div>
            </div>
            <a href="notices.php?source=">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <?php  $query="select * from cv order by id desc";  
           $select_cv=mysqli_query($con,$query);
           $count_cv=mysqli_num_rows($select_cv);
          
            ?>
                     <div class='huge'><?php echo $count_cv; ?></div>
                      <div>CV</div>
                    </div>
                </div>
            </div>
            <a href="cv.php?source=">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <?php  $query="select * from student order by id desc";  
           $select_user=mysqli_query($con,$query);
           $count_user=mysqli_num_rows($select_user);
          
            ?>
                    <div class='huge'><?php echo $count_user; ?></div>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php?source=">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                       <?php  $query="select * from news order by id desc";  
           $select_news=mysqli_query($con,$query);
           $count_news=mysqli_num_rows($select_news);
          
            ?>
                    
                        <div class='huge'><?php echo $count_news; ?></div>
                         <div>News</div>
                    </div>
                </div>
            </div>
            <a href="news.php?source=">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
       <div class="col-lg-3 col-md-6">
        <div class="panel panel-gy">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php  $query="select * from files order by id desc";  
           $select_files=mysqli_query($con,$query);
           $count_files=mysqli_num_rows($select_files);
          
            ?>
                        <div class='huge'><?php echo $count_files; ?></div>
                         <div>Uploaded Files For The User</div>
                    </div>
                </div>
            </div>
            <a href="files.php?source=">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
     <div class="col-lg-3 col-md-6">
        <div class="panel panel-bl">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php  $query="select * from student where status='unconfirmed'";  
           $select_unconfirmed_req=mysqli_query($con,$query);
           $count_unconfirmed_req=mysqli_num_rows($select_unconfirmed_req);
          
            ?>
                        <div class='huge'><?php echo $count_unconfirmed_req ?></div>
                         <div>Unconfirmed User Account Requests</div>
                    </div>
                </div>
            </div>
            <a href="users.php?source=view_unconfirmed_user">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
    
</div>
                <!-- /.row -->