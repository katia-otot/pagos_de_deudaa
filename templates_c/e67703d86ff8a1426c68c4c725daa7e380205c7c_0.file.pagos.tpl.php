<?php
/* Smarty version 4.3.1, created on 2023-05-12 01:05:27
  from 'C:\xampp\htdocs\web2\pagos_de_deudaa\templates\pagos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645d74b7467826_89967935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e67703d86ff8a1426c68c4c725daa7e380205c7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\pagos_de_deudaa\\templates\\pagos.tpl',
      1 => 1683846323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_645d74b7467826_89967935 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <td><input type="submit" value="Editar" onclick="window.location='formulario/' + <?php echo $_smarty_tpl->tpl_vars['pago']->value->id;?>
 ;" /> </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        </table>
        
        <input type="submit" value="Agregar" onclick="window.location='formulario/0';" /> 

        </section>
    </main>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
