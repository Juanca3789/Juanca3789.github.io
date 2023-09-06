<?php
    require_once("../../Models/ModeloChat.php");
    $chat = new Chat();
    if ($_POST){
        if($_POST["idusuario1"] && $_POST["usuario2"] && $_POST["contrasena"]){
            $idusuario1 = intval($_POST["idusuario1"]);
            $nombreusuario2 = trim(strtolower($_POST["usuario2"]));
            $contra = intval($_POST["contrasena"]);
            $chat = $chat->nuevoChat($idusuario1, $nombreusuario2, $contra);
            echo json_encode($chat);
        }
    }
?>