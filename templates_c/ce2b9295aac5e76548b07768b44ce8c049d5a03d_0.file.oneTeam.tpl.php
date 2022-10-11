<?php
/* Smarty version 4.2.1, created on 2022-10-11 16:48:00
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\oneTeam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63458220e0d9e5_04373981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce2b9295aac5e76548b07768b44ce8c049d5a03d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\oneTeam.tpl',
      1 => 1665499679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63458220e0d9e5_04373981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="center">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Posicion</th>
                <th scope="col">Equipo</th>
                <th scope="col">Numero</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['team']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['player']->value->posicion;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['player']->value->equipo;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['player']->value->numero;?>

                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table><?php }
}
