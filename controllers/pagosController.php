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

    public function insertUpdatePago($id, $deudor, $cuota, $cuota_capital, $fecha_pago){
        $this -> model -> insertPago($deudor, $cuota, $cuota_capital, $fecha_pago);
        header("Location: " . BASE_URL);
    }

    public function showFormulario($id){
        $pago = $this -> model -> getPago($id);
        if(!$pago)
            $pago = (object) array("id" => 0, "deudor" => "", "cuota" => "", "cuota_capital" => "", "fecha_pago" => "");
        $this -> view -> showFormulario($pago);
    }

    public function deletePago($id) {
        $this -> model ->  deletePago($id);
        header("Location: " . BASE_URL);
    }

}
