<?php
/* Smarty version 4.3.1, created on 2023-05-09 01:22:44
  from 'C:\xampp\htdocs\Tp\pagos_de_deudaa\templates\pagos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645984445662f8_17594721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb566ae09ec6ba993ab7feceb28ac47cfc15f1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp\\pagos_de_deudaa\\templates\\pagos.tpl',
      1 => 1683586278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645984445662f8_17594721 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main>
    <section>
        <table class="tabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cuota</th>
                <th>Cuota capital</th>
                <th>Fecha de Pago</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagos']->value, 'pago');
$_smarty_tpl->tpl_vars['pago']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pago']->value) {
$_smarty_tpl->tpl_vars['pago']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->deudor;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota_capital;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->fecha_pago;?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        </table>
    <h2>Formulario</h2>
           <form method="post" action="db_pagos_de_deudas.php">
                <label  for ="deudor"> Nombre: </label>
                <input type = "text" name="deudor">

                <label  for ="cuota"> Numero de cuota: </label>
                <input type = "number" name="cuota">

                <label  for ="cuota_capital"> Cuota capital: </label>
                <input type = "number" name="cuota_capital">

                <label  for ="fecha_pago"> Fecha de pago: </label>
                <input type = "number" name="fecha_pago">

                <input type="submit" value="Enviar">
           </form>

        </section>
    </main>

</body>
</html><?php }
}
