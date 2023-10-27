<?php
    session_start();

    if(isset($_SESSION["username"]) && $_SESSION["level"] == 1) {
        if(isset($_POST["id"])) {
            $id = $_POST["id"];

            $name = $_POST['name'];
            $author = $_POST['author'];
            $date = $_POST['date'];
            
            if($_FILES['image']['name'] != NULL) {
                $image_name = $_FILES['image']['name'];
                $path = "images/user/".$image_name."";
                move_uploaded_file($_FILES['image']['tmp_name'], "../".$path);
            } else {
                $path = $_POST['path'];
            }

            include "connection.php";
            $connection = connect();
            $sql = mysqli_query($connection, "UPDATE `images` SET `name` = '$name', `author` = '$author', `date` = '$date', `path` = '$path' WHERE `id` LIKE '$id';");
            disconnect($connection);

            if($sql) {
                echo "<script>window.location = '../admin/index.php?update_success';</script>";
            } else {
                echo "<script>window.location = '../admin/index.php?update_fail';</script>";
            }
        }
    } else {
        echo "<script>window.location = '../';</script>";
    }
    
?>