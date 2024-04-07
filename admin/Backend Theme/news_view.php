<?php
    include("header.php");
?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                include("left_side_bar.php");
            ?>
               
            <!-- Button trigger modal -->


            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">News Data Page</h4>

                                    <table id="datatable" class="table table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Banner</th>
                                                <th>New Type</th>
                                                <th>Writer Name</th>
                                                <th>Writer Profile</th>
                                                <th>Date</th>
                                                <th>Viewer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php


                                                $con = mysqli_connect("localhost", "root", "", "PHP35");
                                                $sql_get = "SELECT * FROM news ORDER BY id ASC";
                                                $table = $con->query($sql_get);
                                                while($row = mysqli_fetch_assoc($table)){ 
                                                    
                                                    echo'
                                                        <tr>
                                                            <td>
                                                                <p style="width: 270px !important;">
                                                                    '.$row['title'].'
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <img width="100px" src="./assets/images/news/'.$row['banner'].'" alt="">
                                                            </td>
                                                            <td>'.$row['news_type'].'</td>
                                                            <td>'.$row['writer_name'].'</td>
                                                            <td>
                                                                <img width="100px" src="./assets/images/writer/'.$row['writer_profile'].'" alt="">
                                                            </td>
                                                            <td>'.$row['date'].'</td>
                                                            <td>'.$row['view'].'</td>
                                                            <td>
                                                                <a class="btn btn-info waves-effect waves-linght" href="./news_update.php">Update</a>
                                                                <button class="btn btn-danger waves-effect waves-linght" id="myModal type="button" data-toggle="modal" data-target="#myModal"" >Delete</button>
                                                            </td>
                                                        </tr>
                                                    ';
                                                
                                                }

                                                
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
            </div>
                <!-- End Page-content -->
                <?php
                    include("footer.php");
                ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        <?php
            include("right_side_bar.php");
        ?>
        <!-- /Right-bar -->
    </body>

</html>

<script>
    $(document).ready(function() {
        $('#myModal').modal('show')
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    })
    
</script>