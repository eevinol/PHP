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
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Website Logo</h4>

                                    <table id="datatable" class="table table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Logo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                $con = mysqli_connect("localhost", "root", "", "PHP35");
                                                $sql_getLogo = "SELECT * FROM aboutus ORDER BY id ASC";
                                                $logo = $con->query($sql_getLogo);
                                                while($row = mysqli_fetch_assoc($logo)){
                                                    echo'
                                                        <tr>
                                                            <td>
                                                                <p style="width: !important;">
                                                                    '.$row['id'].'
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p style="width: !important;">
                                                                    '.$row['icon'].'
                                                                </p>
                                                            </td><td>
                                                                <p style="width: !important;">
                                                                    '.$row['link'].'
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p style="width: !important;">
                                                                    '.$row['email'].'
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <div class="btn btn-danger waves-effect waves-linght" id="DeleteButton" >Delete</div>
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
        $("#DeleteButton").click(function() {
            alert("Running")
        })
    })
</script>