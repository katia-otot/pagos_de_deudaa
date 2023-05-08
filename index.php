<?php
    require_once('libs/smarty/Smarty.class.php');
    require 'db_pagos_de_deudas.php';
    $pagos = getPagos();

    function showPadosDeDeudas ($pagos){
        $arregloPagos = array();
        foreach($pagos as $pago){
            array_push($arregloPagos, $pago);
        }

        $smarty = new Smarty();
        $smarty->assign('pagos', $arregloPagos);

        $smarty->display('templates/pagos.tpl');
    }
?>
    
           




    
