<?php
    class Library extends Controller {
        function __construct() {
            parent::__construct();
        }

        function render() {
            $this -> view -> render('library');
        }
    }
?>