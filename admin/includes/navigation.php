    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Documentation Management System</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                  <?php
      $data = "select * from admin where admin_username='$_SESSION[admin_username]';";
      $name=mysqli_query($con,$data);
     ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 
                        while($row=mysqli_fetch_assoc($name)){
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    echo "$firstname" . " " . "$lastname";
} ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href=".\admin_logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="./"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#notices"><i class="fa fa-fw fa-table"></i> Notices <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="notices" class="collapse">
                            <li>
                                <a href="./notices.php?source=add_notice">Add Notice</a>
                            </li>
                            <li>
                                <a href="./notices.php?source=">View Notices</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#news"><i class="fa fa-fw fa-table"></i> News <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="news" class="collapse">
                            <li>
                                <a href="./news.php?source=add_news">Add News</a>
                            </li>
                            <li>
                                <a href="./news.php?source=">View News</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#cv"><i class="fa fa-fw fa-table"></i> CV <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cv" class="collapse">
                            
                            <li>
                                <a href="./cv.php?source=">View CV</a>
                            </li>
                        </ul>
                    </li>
                    
                   
                    
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-table"></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            
                            <li>
                                <a href="./users.php?source=">View Users</a>
                            </li>
                        </ul>
                    </li>
                    
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#files"><i class="fa fa-fw fa-table"></i> Files <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="files" class="collapse">
                            <li>
                                <a href="./files.php?source=add_file">Add File</a>
                            </li>
                            <li>
                                <a href="./files.php?source=">View Files</a>
                            </li>
                        </ul>
                    </li>
                  
                   
                  
                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>