<?php
    class pagosModel{
        private $db;

        function __construct()
        {
            $this ->db = new PDO('mysql:host=localhost;'.'dbname=db_pagos_de_deudas;charset=utf8', 'root', '');
        }

        public function getPagos(){
            $sentencia = $this->db->prepare("SELECT * FROM pagos");
            $sentencia->execute();
            $pagos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
            return $pagos;
        }

        public function getPago($id){
            $sentencia = $this->db->prepare("SELECT * FROM pagos WHERE id = " . $id);
            $sentencia->execute();
            $pago = $sentencia->fetch(PDO::FETCH_OBJ);

            return $pago;
        }

        public function insertPago($deudor, $cuota, $cuota_capital, $fecha_pago){
            $sentencia = $this->db->prepare("INSERT INTO pagos(deudor, cuota, cuota_capital, fecha_pago) VALUES(?,?,?,?)");
            $sentencia->execute([$deudor, $cuota, $cuota_capital, $fecha_pago]);
        }

        public function editarPago($id, $deudor, $cuota, $cuota_capital, $fecha_pago) {
            $sentencia = $this->db->prepare("UPDATE pagos SET deudor = ?, cuota = ?, cuota_capital = ?, fecha_pago = ? WHERE id = ?");
            $sentencia->execute([$deudor, $cuota, $cuota_capital, $fecha_pago, $id]);
        }

        public function deletePago($id){
            $sentencia = $this->db->prepare("DELETE FROM pagos WHERE id = ?");
            $sentencia->execute([$id]);
        }
    }
?>