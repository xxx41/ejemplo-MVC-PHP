<?php

function cargarControlador($controlador) {
    $nombreControlador = "Controlador".ucwords($controlador);
    $cadenaFichero = "app/controlador/Controlador".$nombreControlador.".php";
    
    if (!is_file($cadenaFichero)) {
        $cadenaFichero = "app/controlador/Controlador".ucwords(CONTROL_DEFECTO).".php";
    }

    require_once $cadenaFichero;
    $controladorObj = new $nombreControlador();
    return $controladorObj;
}

function cargarAccion($controladorObj, $accion) {
    $controladorObj->$accion();
}

function lanzarAccion($controladorObj) {
    if (isset($_GET["accion"]) && method_exists($controladorObj, $_GET["accion"])) {
        cargarAccion($controladorObj, $_GET["accion"]);
    } else {
        cargarAccion($controladorObj, ACCION_DEFECTO);
    }
}