<?php

class Link extends BaseEntidad {
    private $titulo, $link;

    public function __construct() {
        $tabla = "LINKS";
        parent::__construct($tabla);
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getLink() {
        return $this->link;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setLink($link) {
        $this->link = $link;
    }
    
    function selectAll() {
        $consulta = $this->db()->query("SELECT * FROM LINKS;");
        
        while($fila = $consulta->fetch_object()) {
            $resultSet[] = $fila;
        }
        return $resultSet;
    }
    
    function insert() {
        $consulta = "INSERT INTO LINKS (TITULO, LINK) VALUES ('$this->titulo','$this->link');";
        $insert = $this->db()->query($consulta);
        return $insert;
    }
}