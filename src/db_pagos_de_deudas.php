<?php 
function getConnection(){
    return new PDO('mysql:host=localhost;'.'dbname=db_pagos_de_deudas;charset=utf8', 'root', '');
}

function getPago($id) {
    $db = getConnection();

    $sentencia = $db->prepare("SELECT * FROM pagos WHERE id = " . $id);
    $sentencia->execute();
    $pago = $sentencia->fetch(PDO::FETCH_OBJ);

    return $pago;
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

function editarPago($id, $deudor, $cuota, $cuota_capital, $fecha_pago) {
    $db = getConnection();

    $sentencia = $db->prepare("UPDATE pagos SET deudor = ?, cuota = ?, cuota_capital = ?, fecha_pago = ? WHERE id = ?");
    $sentencia->execute([$deudor, $cuota, $cuota_capital, $fecha_pago, $id]);
}

function deletePago($id){
    $db = getConnection();

    $sentencia = $db->prepare("DELETE FROM pagos WHERE id = ?");
    $sentencia->execute([$id]);
}
?>