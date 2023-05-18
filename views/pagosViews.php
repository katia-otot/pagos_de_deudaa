<?php
require_once('libs/smarty/Smarty.class.php');


class pagosView{
    function __construct(){
        
    }

    public function showPagosDeDeudas($pagos) {
        $smarty = new Smarty();
        $smarty->assign('pagos', $pagos);
        $smarty->display('templates/pagos.tpl');
    }

    public function showFormulario($id){
        $smarty = new Smarty();

        if($id == 0)
            $pago = (object) array("id" => 0, "deudor" => "", "cuota" => "", "cuota_capital" => "", "fecha_pago" => "");
        else
            $pago = getPago($id);

        $smarty->assign('pago', $pago);
        $smarty->display('templates/formulario.tpl');
    }

    public function addPago($id, $deudor, $cuota, $cuota_capital, $fecha_pago){

        if (!empty($deudor) && !empty($cuota) && !empty($cuota_capital)){

            if($id == 0)
                insertPago($deudor, $cuota, $cuota_capital, $fecha_pago);
            else
                editarPago($id, $deudor, $cuota, $cuota_capital, $fecha_pago);
            
                header('Location: index');
        } 
        else {
            echo "Faltan datos";
        }
    }

    function borrarPago ($id) {
        deletePago($id);
        header('Location: ../index');
    }
}
