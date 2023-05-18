<?php
require_once "./models/pagosModels.php";
require_once "./views/pagosViews.php";

class pagosController{
    private $model;
    private $view;

    function __construct(){
        $this -> model = new pagosModel();
        $this -> view = new pagosView();
    }
    
    public function getPagos(){
        $tareas = $this -> model -> getPagos();
        $this -> view -> showPagosDeDeudas($tareas);
    }

    public function insertPago($deudor, $cuota, $cuota_capital, $fecha_pago){
        $this -> model -> insertPago($deudor, $cuota, $cuota_capital, $fecha_pago);
    }

}
