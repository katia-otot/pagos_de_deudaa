<?php
require_once('libs/smarty/Smarty.class.php');
require_once ('./models/pagosModels.php');

class pagosView{
    function __construct(){
        
    }

    public function showPagosDeDeudas($pagos) {
        $smarty = new Smarty();
        $smarty->assign('pagos', $pagos);
        $smarty->display('templates/pagos.tpl');
    }

    public function showFormulario($pago){
        $smarty = new Smarty();
       

        $smarty->assign('pago', $pago);
        $smarty->display('templates/formulario.tpl');
    }


}
