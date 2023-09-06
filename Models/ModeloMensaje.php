<?php
    require_once "C:/Program Files/xampp/htdocs/WEB/Libraries/Conexion.php";
    class Mensaje{
        private $conexion;
        public function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
        public function leerMensajes(int $idusuario, int $idchat){
            $rs = $this->conexion->query("CALL leerMensajes('{$idusuario}','{$idchat}')");
            $arr = null;
            while($obj = $rs->fetch_object()){
                $arr[] = $obj;
            }
            if($arr == null){
                return null;
            }
            else{
                return $arr;
            }
        }
        public function nuevoMensaje(string $cuerpo, int $idusuario, int $idchat){
            $rs = $this->conexion->query("CALL nuevoMensaje('{$cuerpo}', '{$idusuario}', '{$idchat}')");
            $rs = $rs->fetch_object();
            return $rs;
        }
        public function eliminarMensaje(int $id){
            $rs = $this->conexion->query("CALL eliminarMensaje('{$id}')");
            $rs = $rs->fetch_object();
            return $rs;
        }
    }
?>

