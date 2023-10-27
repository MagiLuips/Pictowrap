<?php
    class LibraryModel extends Model {
        private $userId;

        function __construct() {
            parent::__construct();
        }

        function setUserId($userId) {
            $this -> userId = $userId;
        }
        
        function addCategory($name) {
            $products = array();
            $path = "public/" . $this -> userId . ".json";
            $exists = false;
            $file;

            # Si el archivo JSON ya existe:
            if (file_exists($path)) {
                # Leer el archivo JSON:
                $file = file_get_contents($path);
                $categories = json_decode($file);

                $counter = 0;
                foreach ($categories as $category) {
                    # Si ya hay una categoría con el nombre especificado:
                    if ($category -> {'name'} == $name) {
                        $exists = true;
                        break;
                    }
                    $counter++;
                }
            }

            if (!$exists) {
                # Organizar los valores a agregar:
                $categories[] = array('name' => $name);
    
                # Crear la cadena JSON:
                $json_chain = json_encode($categories);
    
                # Guardar datos en el archivo JSON:
                file_put_contents($path, $json_chain);
            } else {
                echo "OH NOE!";
            }
        }

        function removeCategory($name) {
            $criterion = "name";
            
            # Leer el archivo JSON:
            $path = "public/".$this -> userId.".json";
            $file = file_get_contents($path);
            $categories = json_decode($file);

            # Leer los datos del archivo JSON:
            $counter = 0;
            foreach ($categories as $category) {
                if ($category -> {$criterion} == $name) {
                    break;
                }
                $counter++;
            }

            # Eliminar el registro seleccionado:
            unset($categories[$counter]);
            $categories = array_values($categories);

            # Crear la cadena JSON:
            $json_string = json_encode($categories);

            # Guardar los datos en el archivo JSON:
            file_put_contents($path, $json_string);
        }
    }
?>