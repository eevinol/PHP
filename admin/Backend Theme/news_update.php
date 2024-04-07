<?php
    include("header.php");
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
                                <h4 class="card-title">News Update Page</h4><br><br>

                                <form action="" method="post" enctype="multipart/form-data">

                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label">Banner</label>
                                        <div class="col-sm-10">
                                            <input class="form-control image1" type="file" id="image" name="banner">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="description" class="col-sm-2 col-form-label">Decription</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" id="elm1" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">News Type</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="news_type" aria-label="Default select example">
                                                <option selected="">Open this select news type</option>
                                                <option value="អត្ថបទពេញនិយមប្រចាំខែ">អត្ថបទពេញនិយមប្រចាំខែ</option>
                                                <option value="អត្ថបទថ្មីៗ">អត្ថបទថ្មីៗ</option>
                                                <option value="កំពូលអ្នកលក់">កំពូលអ្នកលក់</option>
                                                <option value="មុខរបរកសិកម្ម">មុខរបរកសិកម្ម</option>
                                                <option value="មុខរបរបច្ចេកវិទ្យា">មុខរបរបច្ចេកវិទ្យា</option>
                                                <option value="របាយការណ៍">របាយការណ៍</option>
                                                <option value="អត្ថបទ PR">អត្ថបទ PR</option>
                                                <option value="ពិព័រណ៍មុខរបរ 2022">ពិព័រណ៍មុខរបរ 2022</option>
                                                <option value="ចាប់ផ្តើមអាជីវកម្ម">ចាប់ផ្តើមអាជីវកម្ម</option>
                                                <option value="អចលនទ្រព្យ">អចលនទ្រព្យ</option>
                                                <option value="ភាពជាអ្នកដឹកនាំ">ភាពជាអ្នកដឹកនាំ</option>
                                                <option value="ហិរញ្ញវត្ថុ">ហិរញ្ញវត្ថុ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="writer_name" class="col-sm-2 col-form-label">Writer Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="writer_name" name="writer_name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label">Writer Profile</label>
                                        <div class="col-sm-10">
                                            <input class="form-control image2" id="image" type="file" name="writer_profile">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="date" name="date" placeholder="Example: January 01 2023">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-linght">Update News Data</button>
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