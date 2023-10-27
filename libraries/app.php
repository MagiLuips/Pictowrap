<?php
    class App {
        function __construct() {
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if (empty($url[0])) {
                # echo 'Empty URL!';
                require_once('controllers/main.php');

                $controller = new Main();
                $controller -> loadModel('main');
                $controller -> render();

                return false;
            }

            $controllerFile = 'controllers/'.$url[0].'.php';
            if (file_exists($controllerFile)) {
                require_once($controllerFile);

                $controller = new $url[0];
                $controller -> loadModel($url[0]);

                $num_param = sizeof($url);

                if ($num_param > 1) {
                    if ($num_param > 2) {
                        $param = [];
                        for($i = 2; $i < $num_param; $i++) array_push($param, $url[$i]);

                        $controller -> {$url[1]}($param);
                    } else {
                        $controller -> {$url[1]}();
                    }
                } else {
                    $controller -> render();
                }
            } else {
                require_once('controllers/mistakeController.php');

                $controller = new MistakeController();
                $controller -> render();
            }
        }
    }
?>