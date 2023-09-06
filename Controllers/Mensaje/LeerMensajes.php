<?php
    require_once("../../Models/ModeloMensaje.php");
    $mensajes = new Mensaje();
    if($_POST){
        if($_POST["idusuario"] && $_POST["idchat"]){
            $idusuario = intval($_POST["idusuario"]);
            $idchat = intval($_POST["idchat"]);
            $mensajes = $mensajes->leerMensajes($idusuario, $idchat);
            echo json_encode($mensajes);
        }
    }
?>