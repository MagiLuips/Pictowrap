<?php
    class Controller {
        function __construct() {
            $this -> view = new View();
        }

        function loadModel($model) {
            $url = 'models/' . $model . '.php';
            
            if (file_exists($url)) {
                require $url;
                $modelName = $model . 'Model';
                $this -> model = new $modelName();

                /*
                $modelName = $model.'Model';
                $this -> model = new $modelName();
                */
            }
        }

        function issetPost($params) {
            foreach ($params as $param) {
                if (!isset($_POST[$param])) {
                    error_log("POST: Parameter '$param' not set.");
                    return false;
                }
                # error_log("POST: Parameters are set.");
                return true;
            }
        }

        function issetGet($params) {
            foreach ($params as $param) {
                if (!isset($_GET[$param])) {
                    error_log("GET: Parameter '$param' not set.");
                    return false;
                }
                # error_log("GET: Parameters are set.");
                return true;
            }
        }

        function getPost($name) {
            return $_POST[$name];
        }

        function getGet($name) {
            return $_GET[$name];
        }

        function redirect($url, $messages = []) {
            $data = [];
            $params = '';

            foreach ($messages as $key => $value) {
                array_push($data, $key . '=' . $value);
            }

            $params = join('&', $data);

            if ($params != '') {
                $params = '?' . $params;
            }

            header('location: ' . constant('urlsite') . $url . $params);
        }
    }
?>