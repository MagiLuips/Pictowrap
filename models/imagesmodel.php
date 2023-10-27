<?php

class ExpensesModel extends Model implements IModel{

    private $id;
    private $nameImage;
    private $author;
    private $date;
    private $path;

    public function setId($id){ $this->id = $id; }
    public function setNameImage($nameImage){ $this->nameImage = $nameImage; }
    public function setAuthor($author){ $this->author = $author; }
    public function setDate($date){ $this->date = $date; }
    public function setPath($path){ $this->path = $path; }

    public function getId(){ return $this->id;}
    public function getNameImage(){ return $this->nameImage; }
    public function getAuthor(){ return $this->author; }
    public function getDate(){ return $this->date; }
    public function getPath(){ return $this->path; }

    public function __construct(){
        parent::__construct();
    }

    public function save(){
        try{
            $query = $this->prepare('INSERT INTO images (nameImage, author, date, path) VALUES(:nameImage, :author, :category, :d, :p)');
            $query->execute([
                'nameImage' => $this->nameImage, 
                'author' => $this->author,
                'd' => $this->date
                'p' => $this->path
            ]);
            if($query->rowCount()) return true;

            return false;
        }catch(PDOException $e){
            return false;
        }
    }

    //obtener todas las imagenes
    public function getAll(){
        $items = [];

        try{
            $query = $this->query('SELECT * FROM images');

            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new ImagesModel();
                $item->from($p); 
                
                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            echo $e;
        }
    }
    
    //obtener imagenes especificas
    public function get($nameImage){
        try{
            $query = $this->prepare('SELECT * FROM images LIKE nameImage = :nameImage');
            $query->execute([ 'nameImage' => $nameImage]);
            $image = $query->fetch(PDO::FETCH_ASSOC);

            $this->from($image);

            return $this;
        }catch(PDOException $e){
            return false;
        }
    }

    //obtener un objeto image de la bd
    public function getAllByImageId($id){
        $items = [];

        try{
            $query = $this->prepare('SELECT * FROM images WHERE id = :id');
            $query->execute([ "id" => $id]);

            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new ExpensesModel();
                $item->from($p); 
                
                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            echo $e;
        }
    }

    // public function getByUserIdAndLimit($userid, $n){
    //     $items = [];
    //     try{
    //         $query = $this->prepare('SELECT * FROM expenses WHERE id_user = :userid ORDER BY expenses.date DESC LIMIT 0, :n ');
    //         $query->execute([ 'n' => $n, 'userid' => $userid]);
    //         while($p = $query->fetch(PDO::FETCH_ASSOC)){
    //             $item = new ExpensesModel();
    //             $item->from($p); 
                
    //             array_push($items, $item);
    //         }
    //         error_log("ExpensesModel::getByUserIdAndLimit(): count: " . count($items));
    //         return $items;
    //     }catch(PDOException $e){
    //         return false;
    //     }
    // }
    // /**
    //  * Regresa el monto total de expenses en este mes
    //  */
    // function getTotalAmountThisMonth($iduser){
    //     try{
    //         $year = date('Y');
    //         $month = date('m');
    //         $query = $this->db->connect()->prepare('SELECT SUM(amount) AS total FROM expenses WHERE YEAR(date) = :year AND MONTH(date) = :month AND id_user = :iduser');
    //         $query->execute(['year' => $year, 'month' => $month, 'iduser' => $iduser]);

    //         $total = $query->fetch(PDO::FETCH_ASSOC)['total'];
    //         if($total == NULL) $total = 0;
            
    //         return $total;

    //     }catch(PDOException $e){
    //         return NULL;
    //     }
    // }
    // /**
    //  * Obtiene el número de transacciones por mes
    //  */
    // function getMaxExpensesThisMonth($iduser){
    //     try{
    //         $year = date('Y');
    //         $month = date('m');
    //         $query = $this->db->connect()->prepare('SELECT MAX(amount) AS total FROM expenses WHERE YEAR(date) = :year AND MONTH(date) = :month AND id_user = :iduser');
    //         $query->execute(['year' => $year, 'month' => $month, 'iduser' => $iduser]);

    //         $total = $query->fetch(PDO::FETCH_ASSOC)['total'];
    //         if($total == NULL) $total = 0;
            
    //         return $total;

    //     }catch(PDOException $e){
    //         return NULL;
    //     }
    // }

    public function delete($id){
        try{
            $query = $this->prepare('DELETE FROM images WHERE id = :id');
            $query->execute([ 'id' => $id]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public function update(){
        try{
            $query = $this->prepare('UPDATE images SET nameImage = :nameImage, author = :author, date = :d, id = :id WHERE id = :id');
            $query->execute([
                'nameImage' => $this->nameImage, 
                'author' => $this->author,
                'd' => $this->date, 
                'p' => $this->path
            ]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public function from($array){
        $this->id = $array['id'];
        $this->nameImage = $array['nameImage'];
        $this->author = $array['author'];
        $this->date = $array['date'];
        $this->path = $array['path'];
    }

    // /**
    //  * Obtiene el total de amount de expenses basado en id de categoria
    //  */
    // function getTotalByCategoryThisMonth($categoryid, $userid){
    //     error_log("ExpensesModel::getTotalByCategoryThisMonth");
    //     try{
    //         $total = 0;
    //         $year = date('Y');
    //         $month = date('m');
    //         $query = $this->prepare('SELECT SUM(amount) AS total from expenses WHERE category_id = :categoryid AND id_user = :userid AND YEAR(date) = :year AND MONTH(date) = :month');
    //         $query->execute(['categoryid' => $categoryid, 'userid' => $userid, 'year' => $year, 'month' => $month]);
            
    //         $total = $query->fetch(PDO::FETCH_ASSOC)['total'];
    //         if($total == NULL) return 0;
    //         return $total;

    //     }catch(PDOException $e){
    //         error_log("**ERROR: ExpensesModel::getTotalByCategoryThisMonth: error: " . $e);
    //         return NULL;
    //     }
    // }

    // /**
    //  * Obtiene el total de amount de expenses basado en id de categoria
    //  */
    // function getNumberOfExpensesByCategoryThisMonth($categoryid, $userid){
    //     try{
    //         $total = 0;
    //         $year = date('Y');
    //         $month = date('m');
    //         $query = $this->prepare('SELECT COUNT(id) AS total from expenses WHERE category_id = :categoryid AND id_user = :userid AND YEAR(date) = :year AND MONTH(date) = :month');
    //         $query->execute(['categoryid' => $categoryid, 'userid' => $userid, 'year' => $year, 'month' => $month]);

    //         $total = $query->fetch(PDO::FETCH_ASSOC)['total'];
    //         if($total == NULL) return 0;
    //         return $total;

    //     }catch(PDOException $e){
    //         return NULL;
    //     }
    // }
}

?>