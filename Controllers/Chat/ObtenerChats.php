<?php
    require_once("../../Models/ModeloChat.php");
    $chat = new Chat();
    if($_POST){
        if($_POST["id"]){
            $id = intval($_POST["id"]);
            $chat = $chat->obtenerChats($id);
            echo json_encode($chat);
        }
    }
?>