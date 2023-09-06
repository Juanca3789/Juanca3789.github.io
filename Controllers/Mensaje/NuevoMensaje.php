<?php
    require_once("../../Models/ModeloMensaje.php");
    $mensajes = new Mensaje();
    if($_POST){
        if($_POST["Textos"] && $_POST["idusuario"] && $_POST["idchat"] && ($_POST["idchat"] != 0)){
            $cuerpo = $_POST["Textos"];
            $idusuario = intval($_POST["idusuario"]);
            $idchat = intval($_POST["idchat"]);
            $mensajes = $mensajes->nuevoMensaje($cuerpo, $idusuario, $idchat);
            echo json_encode($mensajes);
        }
    }
?>