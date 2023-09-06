<?php
    require_once "../../Models/ModeloUsuario.php";
    $usuario = new Usuario();
    if($_POST){
        if($_POST['Nombre'] && $_POST['Password']){
            $Nombre = strtolower(trim($_POST['Nombre']));
            $Password = sha1(trim($_POST['Password']));
            $usuario = $usuario->iniciarSesion($Nombre, $Password);
            echo json_encode($usuario);
        }
    }
?>