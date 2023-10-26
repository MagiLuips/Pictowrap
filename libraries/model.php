<?php
    include_once("libraries/imodel.php");

    // class Model implements IModel {
    class Model {
        function __construct() {
            $this -> database = new Database();
        }

        function query($query){
            return $this -> database -> connect() -> query($query);
        }
    
        function prepare($query){
            return $this -> database -> connect() -> prepare($query);
        }
    }
?>