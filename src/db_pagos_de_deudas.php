<?php 
function getConnection(){
    return new PDO('mysql:host=localhost;'.'dbname=db_pagos_de_deudas;charset=utf8', 'root', '');
}

function getPagos(){
    $db = getConnection();

    $sentencia = $db->prepare("SELECT * FROM pagos");
    $sentencia->execute();
    $pagos = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $pagos;
}

function insertPago($deudor, $cuota, $cuota_capital, $fecha_pago){
    $db = getConnection();

    $sentencia = $db->prepare("INSERT INTO pagos(deudor, cuota, cuota_capital, fecha_pago) VALUES(?,?,?,?)");
    $sentencia->execute([$deudor, $cuota, $cuota_capital, $fecha_pago]);
}

?>