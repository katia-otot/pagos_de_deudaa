<?php
    require_once('libs/smarty/Smarty.class.php');
    require 'db_pagos_de_deudas.php';

    $pagos = getPagos();

   function showPagosDeDeudas ($pagos){
        
        $smarty = new Smarty();
        $smarty->assign('pagos', $pagos);

        $smarty->display('templates/pagos.tpl');
    }

    function addPago(){
        $deudor = $_POST['deudor'];
        $cuota = $_POST['cuota'];
        $cuota_capital = $_POST['cuota_capital'];
        $fecha_pago = $_POST['fecha_pago'];

        if (!empty($deudor) && !empty($cuota) && !empty($cuota_capital)){
            insertPago($deudor, $cuota, $cuota_capital, $fecha_pago);
            
            $url_pagos_agregados = 'pagos_agregados.tpl';
            $smarty = new Smarty();
            $smarty->assign('url_pagos_agregados', $url_pagos_agregados);
            header("Location: $url_pagos_agregados");
            exit();
        } 
        else {
            echo "Faltan datos";
        }
    }
   
?>
    
           




    

