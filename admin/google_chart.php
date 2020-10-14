   <?php  $query="select * from notices where status='published'";  
           $select_published_notices=mysqli_query($con,$query);
           $count_published_notice=mysqli_num_rows($select_published_notices);
          
            ?>
            
            <?php  $query="select * from notices where status='draft'";  
           $select_draft_notices=mysqli_query($con,$query);
           $count_draft_notice=mysqli_num_rows($select_draft_notices);
          
            ?>
    <?php  $query="select * from cv where status='accepted'";  
           $select_accepted_cv=mysqli_query($con,$query);
           $count_accepted_cv=mysqli_num_rows($select_accepted_cv);
          
            ?>
            
             <?php  $query="select * from cv where status='unaccepted'";  
           $select_unaccepted_cv=mysqli_query($con,$query);
           $count_unaccepted_cv=mysqli_num_rows($select_unaccepted_cv);
          
            ?>


    <?php  $query="select * from student where status='confirmed'";  
           $select_confirmed_user=mysqli_query($con,$query);
           $count_confirmed_user=mysqli_num_rows($select_confirmed_user);
          
            ?>
            
              <?php  $query="select * from student where status='unconfirmed' ";  
                       $select_unconfirmed_user=mysqli_query($con,$query);
                       $count_unconfirmed_user=mysqli_num_rows($select_unconfirmed_user);
          
            ?>

  
            
             <?php  $query="select * from news where status='published'";  
           $select_published_news=mysqli_query($con,$query);
           $count_published_news=mysqli_num_rows($select_published_news);
          
            ?>
            
            <?php  $query="select * from news where status='draft'";  
           $select_draft_news=mysqli_query($con,$query);
           $count_draft_news=mysqli_num_rows($select_draft_news);
          
            ?>
            
              <?php  $query="select * from files where status='published'";  
           $select_published_files=mysqli_query($con,$query);
           $count_published_files=mysqli_num_rows($select_published_files);
          
            ?>
            
            <?php  $query="select * from files where status='draft'";  
           $select_draft_files=mysqli_query($con,$query);
           $count_draft_files=mysqli_num_rows($select_draft_files);
          
            ?>
     
     
 
     
     <script type="text/javascript" >
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
            
           <?php
            
             $element_text=['Published Notice','Draft Notice','Accepted CV','Unaccepted CV','Approved User','Unapproved User','Published News','Draft News','Published Files','Draft Files'];
            $element_count=[$count_published_notice,$count_draft_notice,$count_accepted_cv,$count_unaccepted_cv,$count_confirmed_user,$count_unconfirmed_user,$count_published_news,$count_draft_news,$count_published_files,$count_draft_files];
                         
                        for($i=0;$i<10;$i++){
                 echo  "['{$element_text[$i]}'" . "," .       
                 "{$element_count[$i]}],";
        }                  
            
            ?>               
                                                         
   
          
        ]);

        var options = {
          chart: {
            title: 'Documentation Management',
            subtitle: 'All Files',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="columnchart_material" style="width: auto; height: 500px;"></div>