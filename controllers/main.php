<?php
    class Main extends SessionController {
        function __construct() {
            parent::__construct();
        }

        function render() {
            if (isset($this -> user)) {
                $this -> view -> render('main', [
                    'user' => $this -> user
                ]);
            } else {
                $this -> view -> render('main');
            }
        }
    }
?>