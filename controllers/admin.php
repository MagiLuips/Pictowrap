<?php
    class Admin extends Controller {
        function __construct() {
            parent::__construct();
        }
        function render() {
            $this -> view -> render('admin');
        }
        function delete($id){
            include "public/php/connection.php";
            $connection = connect();
            $id = $id[0];
            $sql = "DELETE FROM `images` WHERE id = $id";
            $result = mysqli_query($connection, $sql);
            $this -> redirect('admin');
        }
        function deleteuser($id){
            include "public/php/connection.php";
            $connection = connect();
            $id = $id[0];
            $sql = "DELETE FROM `users` WHERE id = $id";
            $result = mysqli_query($connection, $sql);
            $this -> redirect('admin');
        } 
    } 

?>