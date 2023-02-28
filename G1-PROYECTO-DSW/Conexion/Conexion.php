<?php

class Conexion {
    
    // Atributos
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $base = "proyfinal_dsw_g1";
    private $conexion; // Variable para almacenar la conexión
    
    // Constructor
    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->base);
        
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }
    
    public function getConexion() {
        return $this->conexion;
    }

    public function close() {
        $this->conexion->close();
    }
}

?>