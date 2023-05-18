<?php
require_once "controllers/pagosController.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$controller = new pagosController;

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
else{
   $action = 'index';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'index':
       $controller -> getPagos();
        break;
    case 'formulario': 
        $controller -> showFormulario($params[1]);
        break;
    case 'nuevoPago':
        $id = $_POST['id'];
        $deudor = $_POST['deudor'];
        $cuota = $_POST['cuota'];
        $cuota_capital = $_POST['cuota_capital'];
        $fecha_pago = $_POST['fecha_pago'];
        $controller -> insertUpdatePago($id, $deudor, $cuota, $cuota_capital, $fecha_pago);
        break;
    case 'borrarPago':
        $id = $params[1];
       $controller -> deletePago($id);
        break;
    default:
        # code...
        break;
}
?>
