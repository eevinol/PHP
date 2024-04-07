<?php
    $con = mysqli_connect("localhost", "root", "", "PHP35");
    function insert_Logo() {
        global $con;

        if(isset($_POST['insert_logo'])) {
            $logoName = rand(1,99999).$_FILES['logo']['name'];
            $pathName = './assets/images/logo/'.$logoName;
            move_uploaded_file($_FILES['logo']['tmp_name'], $pathName);
            
            $insertLogoQuery = "INSERT INTO `logo`(`id`, `logo`) VALUES (null,'$logoName')";
            $con->query($insertLogoQuery);
        }


    }insert_Logo();

    function delete_logo() {
        
    }

    function insert_news() {
        global $con;

        if(isset($_POST['news_insert'])) {
            
            $title = $_POST['title'];

            $bannerName = rand(1,99999).$_FILES['banner']['name'];
            $pathName = './assets/images/news/'.$bannerName;
            move_uploaded_file($_FILES['banner']['tmp_name'], $pathName);

            $description = $_POST['description'];

            $news_type = $_POST['news_type'];

            $writer_name = $_POST['writer_name'];

            $WriterProfile = rand(1,99999).$_FILES['writer_profile']['name'];
            $pathWriterName = './assets/images/writer/'.$WriterProfile;
            move_uploaded_file($_FILES['writer_profile']['tmp_name'], $pathWriterName);

            $date = $_POST['date'];

            
            $insertNewsQuery = "INSERT INTO `news` VALUES (null,'$bannerName','$news_type','$title','$description','$WriterProfile','$writer_name','$date',0)";
            $con->query($insertNewsQuery);
            echo "<script>alert('$date')</script>";
        }

    }insert_news();


    function insert_type() {
        global $con;

        if(isset($_POST['insert_type'])) {

            $text = $_POST['quote'];

            $Name = rand(1,99999).$_FILES['banner']['name'];
            $pathName = './assets/images/banner/'.$Name;
            move_uploaded_file($_FILES['banner']['tmp_name'], $pathName);
            
            $insertQuery = "INSERT INTO `type` VALUES (null,'$Name','$text')";
            $con->query($insertQuery);
        }
    }insert_type();


    function insert_about() {
        global $con;

        if(isset($_POST['insert_about'])) {
            $icon = $_POST['icon'];

            $link = $_POST['link'];

            $email = $_POST['email'];

            $insertQuery = "INSERT INTO `aboutus` VALUES (null,'$icon','$link','$email')";
            $con->query($insertQuery);

        }
    }insert_about();



?>