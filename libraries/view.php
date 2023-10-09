<?php
    class view {
        function __construct() {
            
        }

        function render($view) {
            require 'views/'.$view.'.html';
        }
    }
?>