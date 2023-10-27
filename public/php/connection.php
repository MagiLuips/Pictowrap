<?php
    function connect() {
        $server = "localhost";
        $user = "root";
        $password = "admin";
        $database = "pictowrap";

        $connection = mysqli_connect($server, $user, $password, $database) or die("Connection failed.");

        return $connection;
    }

    function disconnect($connection) {
        $close = mysqli_close($connection) or die("Disconnection failed.");

        return $close;
    }
?>