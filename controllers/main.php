<?php
    class Main extends Controller {
        function __construct() {
            parent::__construct();
        }

        function render() {
            $this -> view -> render('main');
        }

        function show() {
            echo 'Show!';
        }

        function mensaje() {
            echo 'Mensaje!';
            echo 1 + 1;
        }
    }
?>