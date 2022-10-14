<?php
/* Smarty version 4.2.1, created on 2022-10-14 17:33:32
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\form_add_team.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349814c0559c5_29600571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bffd20eb39d48f870770d4bebc10a3623034616' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\form_add_team.tpl',
      1 => 1665761609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349814c0559c5_29600571 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Formulario para agregar un equipo-->
<?php if (($_SESSION['IS_LOGGED']) == true) {?>
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
