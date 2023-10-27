<?php
    class Signup extends Controller {
        function __construct(){
            parent::__construct();
        }
        
        function render(){
            $this -> view -> error_message = '';
            $this -> view -> render('signup');
        }
        
        function newUser(){
            if($this -> issetPost(['username', 'password'])){
                
                $username = $this -> getPost('username');
                $password = $this -> getPost('password');
                
                if($username == '' || empty($username) || $password == '' || empty($password)){
                    $this -> redirect('signup', ['mistake' => Mistake::MISTAKE_SIGNUP_NEWUSER_EMPTY]);
                }
        
                $user = new UserModel();
                $user -> setUsername($username);
                $user -> setPassword($password);
                $user -> setRole("user");
                
                if ($user -> exists($username)) {
                    $this -> redirect('signin', ['mistake' => Mistake::MISTAKE_SIGNUP_NEWUSER_EXISTS]);
                } else if ($user -> save()) {
                    $this -> redirect('signin', ['success' => Success::SUCCESS_SIGNUP_NEWUSER]);
                } else {
                    $this -> redirect('signin', ['mistake' => Mistake::MISTAKE_SIGNUP_NEWUSER]);
                }
            } else {
                $this -> redirect('signin', ['mistake' => Mistake::MISTAKE_SIGNUP_NEWUSER_EXISTS]);
            }
        }
    }
?>