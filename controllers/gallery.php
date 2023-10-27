<?php
    class Gallery extends Controller {
        function __construct() {
            parent::__construct();
        }

        function render() {
            $this -> view -> render('gallery');
            $imagesModel          = new ImagesModel();
            $images               = $this->getImages(5);
        }
    }
?>