<?php
    require_once('libs/smarty/Smarty.class.php');
    require 'db_pagos_de_deudas.php';
    $pagos = getPagos();


   function showPagosDeDeudas ($pagos){
        
        $smarty = new Smarty();
        $smarty->assign('pagos', $pagos);

        $smarty->display('templates/pagos.tpl');

    }

    showPagosDeDeudas($pagos);
?>
    
           




    
