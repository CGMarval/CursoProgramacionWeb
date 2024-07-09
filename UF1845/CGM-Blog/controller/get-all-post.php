<?php
   
   require_once "post-controller.php";

   $resultado = get_all_posts();
   
   // Declaramos el array asociativo para almacenar los posts recogidos de la BD
     $all_posts = array();

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $all_posts[] = $row;
        }
    }

?>