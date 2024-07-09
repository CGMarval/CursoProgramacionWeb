<?php

    global $conecta;

$error = false;
$title = '';
$excerpt = '';
$content = '';

if (isset($_POST['submit-new-post'])) {

    // Se asigna a las variables lo que se recibe del formulario
    $title = $_POST['title'];
    $excerpt = $_POST['excerpt'];
    $content = strip_tags($_POST['content'],'<br><p><a><img><div>');

    // Escapar caracteres especiales para la consulta SQL
    $title_esc = $mysqli->real_escape_string($conecta, $title);
    $excerpt_esc = $mysqli->real_escape_string($conecta, $excerpt);
    $content_esc = $mysqli->real_escape_string($conecta, $content);


    if (empty($title) || empty($content)) {
        $error = true;
    } else {
        include_once "post-controller.php";
        insert_post($title_esc, $excerpt_esc, $content_esc);
    }
}

?>