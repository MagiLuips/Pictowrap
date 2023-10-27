<?php
    class Library extends SessionController {
        function __construct() {
            parent::__construct();

            $this -> user = $this -> getUserSessionData();
        }

        function render() {
            $this -> view -> render('library', [
                'categories' => $this -> getCategoryList()
            ]);
        }

        function getCategoryList() {
            $cat = [];
            $path = "public/" . $this -> user -> getId() . ".json";

            if (file_exists($path)) {
                $file = file_get_contents($path);
                $categories = json_decode($file);

                foreach ($categories as $category) {
                    array_push($cat, $category -> {'name'});
                }
                # $cat = array_values(array_unique($cat));

                return $cat;
            }
        }

        function addCategory($name) {
            if ($name == '' || empty($name)) {
                error_log('Library::addCategory() empty.');
                return;
            }

            $this -> model -> setUserId($this -> user -> getId());
            $this -> model -> addCategory($name);

            $this -> redirect("library");
        }

        function removeCategory($name) {
            if ($name == '' || empty($name)) {
                error_log('Library::removeCategory() empty.');
                return;
            }

            $this -> model -> setUserId($this -> user -> getId());
            $this -> model -> removeCategory($name);

            $this -> redirect("library");
        }
    }
?>