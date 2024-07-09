<?php

global $promedio;


/**
 * Inserta una nueva tarea
 *
 * @param $title
 * @param $excerpt
 * @param $content
 */
function calcular_promedio( $precio1, $precio2, $precio3 ) {
    $promedio = ($precio1 + $precio2 + $precio3) / 3;
}


