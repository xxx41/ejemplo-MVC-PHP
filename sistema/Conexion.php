<?php

class Conexion {
    private $driver, $host, $user, $pass, $database, $charset;
    
    //Para construir la clase le asignamos los valores que contiene el  archivo 
    //de configuracion de la base de datos
    public function __construct() {
        $config_db = require_once 'config/basededatos.php';
        $this->driver = $config_db["driver"];
        $this->host = $config_db["host"];
        $this->user = $config_db["user"];
        $this->pass = $config_db["pass"];
        $this->database = $config_db["database"];
        $this->charset = $config_db["charset"];
    }
    
    //Metodo conectar crea una nueva conexion y establece el charset del config
    public function conectar() {
        if ($this->driver == "mysql" || $this->driver == null) {
            $conexion = new mysqli($this->host, $this->user, $this->pass, $this->database);
            $conexion->query("SET NAMES '". $this->charset ."';");
        }
        return $conexion;
    }
    
    public function getDriver() {
        return $this->driver;
    }


}