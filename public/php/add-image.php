<?php
    if(isset($_POST["add-image"])) {
        $name = $_POST['name'];
        $author = $_POST['author'];
        $date = $_POST['date'];
        
        $image_name = $_FILES['image']['name'];

        $path = "images/user/".$image_name."";
        move_uploaded_file($_FILES['image']['tmp_name'], "../".$path);

        include "connection.php";
        $connection = connect();
        $sql = "INSERT INTO `images` (`id`, `name`, `author`, `date`, `path`) VALUES (NULL, '$name', '$author', '$date', '$path');";
        $result = mysqli_query($connection, $sql);
        disconnect($connection);

        if($result) {
            echo "<script>window.location = '../admin/index.php?image_success';</script>";
        } else {
            echo "<script>window.location = '../admin/index.php?image_fail';</script>";
        }
    }
?>