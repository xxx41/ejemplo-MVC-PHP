<?php

class BaseEntidad {
    private $tabla, $db, $conexion;
    
    //Recoge en el constructo la tabla e instancia una conexion
    public function __construct($tabla) {
        $this->tabla = (string) $tabla;
        require_once 'Conexion.php';
        $this->conexion = new Conexion();
        $this->db = $this->conexion->conectar();
    }
    
    public function db() {
        return $this->db;
    }
}

