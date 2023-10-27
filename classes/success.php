<?php
    class Success {
        const SUCCESS_SIGNUP_NEWUSER = "";

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