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
?>