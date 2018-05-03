<?php

require_once 'config/global.php';
require_once 'sistema/BaseControlador.php';
require_once 'sistema/FuncionesControlador.php';

if (isset($_GET["controlador"])) {
    $controladorObj = cargarControlador($_GET["controlador"]);
} else {
    $controladorObj = cargarControlador(CONTROL_DEFECTO);
}
lanzarAccion($controladorObj);