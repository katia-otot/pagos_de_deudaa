<?php
/* Smarty version 4.3.1, created on 2023-05-12 01:10:16
  from 'C:\xampp\htdocs\web2\pagos_de_deudaa\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645d75d8dd7c66_13076408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ff8348313a12aa304a795f8ddcf4be2eb06c527' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\pagos_de_deudaa\\templates\\formulario.tpl',
      1 => 1683846608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_645d75d8dd7c66_13076408 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h2>Formulario</h2>
   
    <form method="post" action="../nuevoPago">
        <input type = "hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pago']->value->id;?>
"><br>

        <label  for ="deudor"> Nombre: </label>
        <input type = "text" name="deudor" value="<?php echo $_smarty_tpl->tpl_vars['pago']->value->deudor;?>
"><br>

        <label  for ="cuota"> Número de cuota: </label>
        <input type = "number" name="cuota" value="<?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota;?>
"><br>

        <label  for ="cuota_capital"> Cuota capital: </label>
        <input type = "number" name="cuota_capital" value="<?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota_capital;?>
"><br>

        <label  for ="fecha_pago"> Fecha de pago: </label>
        <input type = "number" name="fecha_pago" value="<?php echo $_smarty_tpl->tpl_vars['pago']->value->fecha_pago;?>
" placeholder="aaaa-mm-dd"><br>

        <input type="submit" value="Enviar"><br>
    </form>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
