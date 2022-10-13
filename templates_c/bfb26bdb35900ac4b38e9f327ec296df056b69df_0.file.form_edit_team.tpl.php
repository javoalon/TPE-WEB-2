<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:38:01
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\form_edit_team.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63484cf9875e28_45424253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfb26bdb35900ac4b38e9f327ec296df056b69df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\form_edit_team.tpl',
      1 => 1665682634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63484cf9875e28_45424253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
<!--Formulario para editar al equipo-->
<form action="editTeam/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nombre del Equipo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="editTeam">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Editar Equipo</button>
</form><?php }
}
