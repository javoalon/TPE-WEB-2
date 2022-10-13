<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:33:36
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\form_add_team.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634868108e7ea3_17462429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bffd20eb39d48f870770d4bebc10a3623034616' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\form_add_team.tpl',
      1 => 1665689567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634868108e7ea3_17462429 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Formulario para agregar un equipo-->
<?php if (($_smarty_tpl->tpl_vars['user']->value->rol) == "Admin") {?>
    <form action="addTeam" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre del Equipo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="newTeam">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Agregar Equipo</button>
    </form>
<?php }
}
}
