<?php
    class Signin extends SessionController {
        function __construct() {
            parent::__construct();
        }

        function render() {
            $actual_link = trim("$_SERVER[REQUEST_URI]");
            $url = explode('/', $actual_link);
            $this -> view -> errorMessage = '';
            $this -> view -> render('signin');
        }

        function authenticate() {
            echo "hola";
            if ($this -> issetPost(['username', 'password'])) {
                $username = $this -> getPost('username');
                $password = $this -> getPost('password');
    
                if ($username == '' || empty($username) || $password == '' || empty($password)) {
                    error_log('Login::authenticate() empty.');
                    $this -> redirect('', ['mistake' => Mistake::MISTAKE_SIGNIN_AUTHENTICATE_EMPTY]);
                    return;
                }
                
                $user = $this -> model -> signin($username, $password);
    
                if ($user != NULL) {
                    error_log('Login::authenticate() ok :)');    
                    $this -> initialize($user);
                } else {
                    error_log('Login::authenticate() username and/or password are wrong.');
                    // $this -> redirect('', ['mistake' => Mistake::MISTAKE_SIGNIN_AUTHENTICATE_WRONG]);
                    
                    return;
                }
            } else {
                error_log('Login::authenticate() grave mistake.');
                // $this -> redirect('', ['mistake' => Mistake::MISTAKE_SIGNIN_AUTHENTICATE]);
            }
            
        }
    }
?>