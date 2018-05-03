<?php

class BaseControlador {
    
    public function __construct() {
        //Incluimos el fichero de BaseEntidad y los que estan en el directorio modelo
        require_once "BaseEntidad.php";
        foreach(glob("app/modelo/*.php") as $fichero) {
            require_once $fichero;
        }
    }
    
    public function vista($vista, $data) {
        foreach ($data as $id_asocc => $value) {
            ${$id_asocc} = $value;
        }
        require_once 'AyudaVista.php';
        $ayuda = new AyudaVista();
        require_once "app/vista/".$vista."Vista.php";
    }
    
    public function redireccionar($controlador=CONTROL_DEFECTO,$accion=ACCION_DEFECTO) {
        header("Location: index.php?controlador=".$controlador."&accion=".$accion);
    }
}