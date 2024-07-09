<?php
require_once "db.php";

class Posts
{
    public $id;
    public $title;
    public $excerpt;
    public $content;
    public $published_on;

    public function __construct($id = 0,$title = "",$excerpt = "",$content = "", $published_on = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->content = $content;
        $this->published_on = $published_on;
    }

    public function listar() {
        try
        {
            $conn = new DB();
            $stm = $conn->conexion()->prepare("SELECT * from posts");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }
}
?>