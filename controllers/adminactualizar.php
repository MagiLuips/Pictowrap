<?php
    class Adminactualizar extends Controller {
        function __construct() {
            parent::__construct();
            $this -> view -> id = '';
        }
        function actualizar($id){
            $dato = $id[0];
            //echo $dato;
            $this -> view -> id = $id[0];
            $this -> view -> render('adminactualizar');
        }
        function update($id){
            if ($this -> issetPost(['name', 'author','date','path'])) {
                include "public/php/connection.php";
                $connection = connect();
                $id = $id[0];
                $name = $this -> getPost('name');
                $author = $this -> getPost('author');
                $date = $this -> getPost('date');
                $path = $this -> getPost('path');
                echo $id;
                echo $name;
                echo $author;
                echo $date;
                echo $path;
                $sql = "UPDATE `images` SET `id`='$id',`name`='$name',`author`='$author',`date`='$date',`path`='$path' WHERE id = $id";
                $result = mysqli_query($connection, $sql);
                $this -> redirect('admin');
            }
        }
    } 

?>