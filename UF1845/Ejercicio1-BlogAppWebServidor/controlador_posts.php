<?php
    require_once "./post.php";
    $datos = new Posts();
    $jsondata = $datos->listar();
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
?>    
