<?php

class AyudaVista {
    public function url($controlador=DEFAULT_CONTROLLER, $accion=DEFAULT_ACTION) {
        $cadenaUrl = "index.php?controlador=".$controlador."&accion=".$accion;
        return $cadenaUrl;
    }
}
