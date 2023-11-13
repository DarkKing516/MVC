<?php
require_once('./controller/clienteC.php');

if (!isset($_GET['m'])) {
    require_once('./views/header.php');
    require_once('./views/listarcliente.php');
    require_once('./views/footer.php');
} else {
    $m = $_GET['m'];

    $controlador = new clienteC();

    if (method_exists($controlador, $m)) :
        require_once('./views/header.php');
        $controlador->$m();
        require_once('./views/footer.php');
    endif;
}

