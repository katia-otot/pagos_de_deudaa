<?php
require_once "src/index.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = 'index';
}

$params =explode('/', $action);

switch ($params[0]) {
    case 'index':
        showPagosDeDeudas($pagos);
        break;
    case 'nuevoPago':
        addPago();
        break;
    default:
        # code...
        break;
}
?>
