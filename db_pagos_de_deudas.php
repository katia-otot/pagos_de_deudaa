<?php 

function getPagos(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_pagos_de_deudas'
                    ,'root', '');

    $sentencia = $db->prepare("SELECT * FROM pagos");
    $sentencia->execute();
    $pagos = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $pagos;
}

function insertPagos($deudor, $cuota, $cuota_capital, $fecha_pago){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_pagos_de_deudas'
                    ,'root', '');
    $sentencia = $db->prepare("INSERT INTO 'pagos' VULUES (NULL, $deudor, $cuota, $cuota_capital,$fecha_pago)");
    $sentencia->execute();

    header("Location: index.php");
    exit;
}

if(isset($_POST)) {
    $deudor = $_POST['deudor'];
    $cuota = $_POST['cuota'];
    $cuota_capital = $_POST['cuota_capital'];
    $fecha_pago = $_POST['fecha_pago'];

    insertPagos($deudor,
    $cuota,
    $cuota_capital,
    $fecha_pago);
}


?>