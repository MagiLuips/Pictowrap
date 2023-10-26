<?php
    class MistakeController extends Controller {
        function __construct() {
            parent::__construct();
            $this -> view -> error_message = "This is all your fault!";
        }

        function render() {
            $this -> view -> render('mistake');
        }
    }
?>