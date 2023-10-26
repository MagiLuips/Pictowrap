<?php
    class Signout extends SessionController {
        function __construct() {
            parent::__construct();
        }

        public function render() {
            $this -> signout();
            $this -> redirect('');
        }
    }
?>