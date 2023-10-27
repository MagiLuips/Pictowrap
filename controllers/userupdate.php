<?php
    class Userupdate extends Controller {
        function __construct() {
            parent::__construct();
            $this -> view -> id = '';
        }
        function actualizar($id){
            $dato = $id[0];
            //echo $dato;
            $this -> view -> id = $id[0];
            $this -> view -> render('userupdate');
        }
        function updateuser($id){
            if ($this -> issetPost(['username','name','password','role','photo'])) {
                include "public/php/connection.php";
                $connection = connect();
                $id = $id[0];
                $username = $this -> getPost('username');
                $name = $this -> getPost('name');
                $password = $this -> getPost('password');
                $role = $this -> getPost('role');
                $photo = $this -> getPost('photo');
                $sql = "UPDATE `users` SET `id`='$id',`username`='$username',`password`=MD5('$password'),`role`='$role',`budget`='0',`photo`='$photo',`name`='$name' WHERE id = $id";
                $result = mysqli_query($connection, $sql);
                $this -> redirect('admin');
            }
        }
    } 

?>