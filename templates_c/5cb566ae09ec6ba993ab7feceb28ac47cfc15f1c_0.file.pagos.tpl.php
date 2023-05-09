<?php
/* Smarty version 4.3.1, created on 2023-05-09 04:29:46
  from 'C:\xampp\htdocs\Tp\pagos_de_deudaa\templates\pagos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6459b01a76f1e6_96175947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb566ae09ec6ba993ab7feceb28ac47cfc15f1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp\\pagos_de_deudaa\\templates\\pagos.tpl',
      1 => 1683599330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6459b01a76f1e6_96175947 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
           <form method="post" action="nuevoPago">
                <label  for ="deudor"> Nombre: </label>
                <input type = "text" name="deudor"><br>

                <label  for ="cuota"> Número de cuota: </label>
                <input type = "number" name="cuota"><br>

                <label  for ="cuota_capital"> Cuota capital: </label>
                <input type = "number" name="cuota_capital"><br>

                <label  for ="fecha_pago"> Fecha de pago: </label>
                <input type = "number" name="fecha_pago"><br>

                <input type="submit" value="Enviar"><br>
           </form>

        </section>
    </main>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
