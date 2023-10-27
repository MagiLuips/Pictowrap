<?php
    session_start();

    if(isset($_SESSION["username"]) && $_SESSION["level"] == 1) {
        if(isset($_GET["id"])) {
            $id = $_GET["id"];

            include "connection.php";
            $connection = connect();
            $sql = "DELETE FROM `images` WHERE `id` LIKE '$id';";
            $result = mysqli_query($connection, $sql);
            disconnect($connection);

            if($result) {
                echo "<script>window.location = '../admin/index.php?delete_success';</script>";
            } else {
                echo "<script>window.location = '../admin/index.php?delete_fail';</script>";
            }
        }
    } else {
        echo "<script>window.location = '../';</script>";
    }
    
?>