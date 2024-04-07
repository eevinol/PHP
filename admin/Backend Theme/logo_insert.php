<?php
    include("header.php");
    include("function.php");
?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                include("left_side_bar.php");
            ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <h4 class="card-title">News Insert Page</h4><br><br>

                                <form action="" method="post" enctype="multipart/form-data">

                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label">LOGO</label>
                                        <div class="col-sm-10">
                                            <input class="form-control image1" type="file" id="image" name="logo">
                                        </div>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-info waves-effect waves-linght" name="insert_logo">Insert News Data</button>
                                </form>

                            </div>
                        </div>
                    </div>
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