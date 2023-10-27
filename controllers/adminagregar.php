<?php
    class Adminagregar extends Controller {
        function __construct() {
            parent::__construct();
        }
        function add(){
            $this -> view -> render('adminagregar');
        }
        function addregister(){
            if ($this -> issetPost(['name', 'author','date','path'])) {
                include "public/php/connection.php";
                $connection = connect();
                $name = $this -> getPost('name');
                $author = $this -> getPost('author');
                $date = $this -> getPost('date');
                $path = $this -> getPost('path');
                $sql = "INSERT INTO `images`(`id`, `name`, `author`, `date`, `path`) VALUES ('0','$name','$author','$date','$path')";
                $result = mysqli_query($connection, $sql);
                $this -> redirect('admin');
            }
        }
    } 

?>