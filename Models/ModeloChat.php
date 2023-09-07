<?php
    require_once "http://34.155.100.253/Libraries/Conexion.php";
    class Chat{
        private $conexion;
        public function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
        public function nuevoChat(int $idusuario1, String $idusuario2, int $contra){
            $rs = $this->conexion->query("CALL nuevoChat('{$idusuario1}','{$idusuario2}', '{$contra}')");
            $rs = $rs->fetch_object();
            return $rs;
        }
        public function obtenerChats(int $idusuario){
            $rs = $this->conexion->query("CALL monitorearChats('{$idusuario}')");
            while($obj = $rs->fetch_object()){
                $arr[] = $obj;
            }
            return $arr;
        }
        public function borrarChat(int $id){
            $rs = $this->conexion->query("CALL borrarChat('{$id}')");
            $rs = $rs->fetch_object();
            return $rs;
        }
    }
?>