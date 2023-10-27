<?php
    class view {
        function __construct() {
            
        }

        function render($view, $data = []) {
            $this -> data = $data;

            $this -> handleMessages();

            require 'views/'.$view.'.php';
        }

        private function handleMessages() {
            if (isset($_GET['success']) && isset($_GET['mistake'])) {
                # Sorry, nothing.
            } else if (isset($_GET['success'])) {
                $this -> handleSuccess();
            } else if (isset($_GET['mistake'])) {
                $this -> handleMistake();
            }
        }

        private function handleSuccess() {
            if (isset($_GET['success'])) {
                $hash = $_GET['success'];
                $success = new Success();

                if ($success -> issetKey($hash)) {
                    error_log("View::handleSuccess() issetKey => " . $success -> get($hash));
                    $this -> data['success'] = $success -> get($hash);
                } else {
                    $this -> data['success'] = NULL;
                }
            }
        }

        private function handleMistake() {
            if (isset($_GET['mistake'])) {
                $hash = $_GET['mistake'];
                $mistake = new Mistake();

                if ($mistake -> issetKey($hash)) {
                    error_log("View::handleMistake() issetKey => " . $mistake -> get($hash));
                    $this -> data['mistake'] = $mistake -> get($hash);
                } else {
                    $this -> data['mistake'] = NULL;
                }
            }
        }

        public function showMessages() {
            $this -> showMistake();
            $this -> showSuccess();
        }

        public function showSuccess() {
            if (array_key_exists('success', $this -> data)) {
                echo "<div class='success'>" . $this -> data['success'] . "</div>";
            }
        }

        public function showMistake() {
            if (array_key_exists('mistake', $this -> data)) {
                echo "<div class='mistake'>" . $this -> data['mistake'] . "</div>";
            }
        }
    }
?>