<?php
    class Signup extends Controller {
        function __construct() {
            parent::__construct();
        }

        function render() {
            $this -> view -> render('signup');
        }
    }
?>