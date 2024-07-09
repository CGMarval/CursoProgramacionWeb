<?php
require_once "db.php";

class Articulos
{
    public $codigo;
    public $descripcion;
    public $familia;
    public $precio;

    public function __construct($codigo = 0,$descripcion = "",$familia = 0,$precio = 0)
    {
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->familia = $familia;
        $this->precio = $precio;
    }

    public function listar($filtro) {
        try
        {
            $conn = new DB();
            $clausula = "SELECT articulos.codigo, articulos.descripcion, familia.familia, articulos.precio FROM articulos INNER JOIN familia ON articulos.familia = familia.codigo";
            if ($filtro != "0") {
                $clausula = $clausula." where articulos.familia = ".$filtro;
            }
            $stm = $conn->conexion()->prepare($clausula);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

}
?>