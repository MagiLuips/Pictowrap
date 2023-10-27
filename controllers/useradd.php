<?php
    class Useradd extends Controller {
        function __construct() {
            parent::__construct();
        }
        function add(){
            $this -> view -> render('useradd');
        }
        function adduser(){
            if ($this -> issetPost(['username','name','password','role','photo'])) {
                include "public/php/connection.php";
                $connection = connect();
                $username = $this -> getPost('username');
                $name = $this -> getPost('name');
                $password = $this -> getPost('password');
                $role = $this -> getPost('role');
                $photo = $this -> getPost('photo');
                $sql = "INSERT INTO `users`(`id`, `username`, `password`, `role`, `budget`, `photo`, `name`) VALUES ('0','$username',MD5('$password'),'$role','0','$photo','$name')";
                $result = mysqli_query($connection, $sql);
                $this -> redirect('admin');
            }
        }
    } 

?>