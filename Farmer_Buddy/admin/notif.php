<?php 
session_start();
include "includes/header.php"?>

    <!-- partial -->
		<div class="container-fluid page-body-wrapper">

			<div class="main-panel">

				<div class="content-wrapper">

					<?php include "includes/middle.php"?>
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <form action="notif.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Text</label>
      <input type="text" name="text"  class="form-control" id="inputEmail4" placeholder="Enter the Text">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Link</label>
      <input type="text" name="link" class="form-control" id="inputPassword4" placeholder="Enter the Link">
    </div>
  </div>
  <input type="submit" class="mt-2 btn btn-primary" value="Submit" name="submit">
  
  
</form>


        <?php 

        if(isset($_POST['submit'])){
        $text = $_POST['text'];
        $link = $_POST['link'];

        $query = "INSERT INTO notification (notification_id, notification_text, notification_link) VALUES (NULL, '{$text}', '{$link}')";
        $result = mysqli_query($con,$query);


        ?>
        <script>
        window.location = "notif.php";
        </script>
        <?php

        }

        ?>


<div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          
                          <th>
                            ID
                          </th>
                          <th>
                            Text
                          </th>
                          <th>
                            Link
                          </th>
                          <th>
                            Delete
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                              
                              
            <?php
    
                $notification_query = "SELECT * FROM notification";
                $notification_query_result  =mysqli_query($con,$notification_query);
                 while($row = mysqli_fetch_assoc($notification_query_result)){
                     $notification_id = $row['notification_id'];
                     $notification_text = $row['notification_text'];
                     $notification_link = $row['notification_link'];
                     
                     echo "<tr>";
                     echo "<td>$notification_id</td>";
                     echo "<td>$notification_text</td>";
                     echo "<td>$notification_link</td>";
             
//
//                     echo "<td>$comment_date</td>";
//                     echo "<td><a href='comments.php?source=view_all_comments&approve={$comment_id}'>Approve</a></td>";
//                     echo "<td><a href='comments.php?source=view_all_comments&unapprove={$comment_id}'>Unapprove</a></td>";
                
                    // echo "<td><a rel='{$comment_id}' href='javascript:void(0)' class='delete_link'>Delete</a></td>";
                     
                          echo "<td><a onclick=\" javascript : return confirm('Are you sure want to delete this Notification?')\" href='notif.php?delete=$notification_id'>Delete</a></td>";
                     echo "</tr>";
                     
                     
                     
                 }

            ?> 

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
        
        <?php 
                          if(isset($_GET['delete'])){

                $notification_id = $_GET['delete'] ; 
                $delete_query = "DELETE FROM notification where notification_id ={$notification_id}";
                $delete_query_result = mysqli_query($con,$delete_query);
//                 $comments_count ="UPDATE post SET post_comment_count = post_comment_count - 1 where post_id = $comment_post_id";
//                    mysqli_query($con,$comments_count);
                ?>

                <script>
                window.location= 'notif.php';
                </script>
                <?php

                }
           ?> 
          
          ?>
        
        
        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

    <!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="vendors/justgage/justgage.js"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>