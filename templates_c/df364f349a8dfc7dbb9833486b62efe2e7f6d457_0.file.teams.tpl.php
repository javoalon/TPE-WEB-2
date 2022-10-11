<?php
/* Smarty version 4.2.1, created on 2022-10-11 06:20:04
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\teams.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344eef4041a15_32849670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df364f349a8dfc7dbb9833486b62efe2e7f6d457' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\teams.tpl',
      1 => 1665462001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6344eef4041a15_32849670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="flex-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
    <div><a href="equipo/<?php echo $_smarty_tpl->tpl_vars['team']->value->equipo;?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value->equipo;?>
<a></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
