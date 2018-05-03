<?php

class ControladorLink extends BaseControlador {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $link = new Link();
        $selectAll = $link->selectAll();
        
        $this->vista("index", array(
            "selectAll" => $selectAll
        ));
    }
    
    public function newLink() {
        $this->vista("newlink", array());
    }
    
    public function addLink() {
        if (isset($_POST["titulo"])) {
            $link = new Link();
            $link->setTitulo($_POST["titulo"]);
            $link->setLink($_POST["link"]);
            $link->insert();
        }
        $this->redireccionar("link", "index");
    }
    
    
}

