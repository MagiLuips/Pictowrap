<?php
    class Mistake {
        const MISTAKE_SIGNIN_AUTHENTICATE       = "4d68d0e4dd93d4fb107d017896da8fa8";
        const MISTAKE_SIGNIN_AUTHENTICATE_EMPTY = "7a7506f289ff6d4fc8c6e4302dd038f5";
        const MISTAKE_SIGNIN_AUTHENTICATE_WRONG = "23598bcf08df0814527ebd1c4d8bb4ac";
        const MISTAKE_SIGNUP_NEWUSER            = "fbf413a7e4292e4f53fd5ce5aab8decc";
        const MISTAKE_SIGNUP_NEWUSER_EMPTY      = "cba36021d0ba5f4d700389ecec2d31f0";
        const MISTAKE_SIGNUP_NEWUSER_EXISTS     = "4b846504ced4eecc928f0cfa8acea275";

        private $mistakeList = [];

        public function __construct() {
            $this -> mistakeList = [
                Mistake::MISTAKE_SIGNIN_AUTHENTICATE        => 'A mistake occurred while authenticating!',
                Mistake::MISTAKE_SIGNIN_AUTHENTICATE_EMPTY  => 'Sign-in data is empty!',
                Mistake::MISTAKE_SIGNIN_AUTHENTICATE_WRONG  => 'Sign-in data is incorrect!',
                Mistake::MISTAKE_SIGNUP_NEWUSER             => 'A mistake occurred while registering!',
                Mistake::MISTAKE_SIGNUP_NEWUSER_EMPTY       => 'Sign-up data is empty!',
                Mistake::MISTAKE_SIGNUP_NEWUSER_EXISTS      => 'Sign-up data is incorrect!'
            ];
        }

        function get($hash){
            return $this -> mistakeList[$hash];
        }
    
        function issetKey($key){
            /*
            if (array_key_exists($key, $this -> mistakeList)) {
                return true;
            } else {
                return false;
            }
            */
            return array_key_exists($key, $this -> mistakeList);
        }
    }
?>