<?php
    class Gallery extends Controller {
        function __construct() {
            parent::__construct();
        }

        function render() {
            $this -> view -> render('gallery', [
                'images' => $this -> getModelImages()
            ]);
            echo $this -> getPost('name');
        }

        function getModelImages(){
            //echo $this -> getPost('name');
            $name = $this -> getPost('name');
            return $this -> model -> getImages($name);
        }
    }
?>