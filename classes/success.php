<?php
    class Success {
        const SUCCESS_SIGNUP_NEWUSER = "411550dd783fed54585546ae2524c676";

        private $successList = [];

        public function __construct() {
            $this -> successList = [
                Success::SUCCESS_SIGNUP_NEWUSER => 'Sign-up successful!'
            ];
        }

        function get($hash){
            return $this -> successList[$hash];
        }
    
        function issetKey($key){
            /*
            if (array_key_exists($key, $this -> successList)) {
                return true;
            } else {
                return false;
            }
            */
            return array_key_exists($key, $this -> successList);
        }
    }
?>