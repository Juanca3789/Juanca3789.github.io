<?php
    require_once "http://34.155.100.253/Libraries/Conexion.php";
    class Usuario{
        private $conexion;
        public function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
        public function crearUsuario(string $Nombre, String $Password){
            $rs = $this->conexion->query("CALL crearUsuario('{$Nombre}', '{$Password}')");
            $rs = $rs->fetch_object();
            return $rs;
        }
        public function iniciarSesion(string $Nombre, string $Password){
            $rs = $this->conexion->query("CALL iniciarSesion('{$Nombre}', '{$Password}')");
            $rs = $rs->fetch_object();
            return $rs;
        }
    }
?>