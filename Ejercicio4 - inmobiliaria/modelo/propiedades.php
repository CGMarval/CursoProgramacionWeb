<?php
require_once "db.php";

class Propiedad
{
    public $id;
    public $tipo;
    public $idlocalidades;
    public $metros;
    public $dormitorio;
    public $baño;
    public $precio;

    public function __construct($id = 0,$tipo = "",$idlocalidades = 0,$metros = 0,$dormitorio = 0,$baño = 0,$precio = 0)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->idlocalidades = $idlocalidades;
        $this->metros = $metros;
        $this->dormitorio = $dormitorio;
        $this->baño = $baño;
        $this->precio = $precio;
        
    }

    public function listar($filtro) {
        try
        {
            $conn = new DB();
            $clausula = "SELECT propiedades.id, tipo, metros, dormitorio, baño, precio, descripcion FROM propiedades INNER JOIN localidades ON propiedades.idlocalidades = localidades.id";
            if ($filtro != "0") {
                $clausula = $clausula." where propiedades.idlocalidades = ".$filtro;
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