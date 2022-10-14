<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:57:34
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\form_edit_cuenta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349bf2e296c85_14193118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba9309fb32864cd36ececfd6c25862f134bddf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\form_edit_cuenta.tpl',
      1 => 1665777452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6349bf2e296c85_14193118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="cambiarPassword">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="emailEditPw" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Contraseña actual</label>
            <input type="password" required class="form-control" id="password" name="editPassword">
        </div>
        <div class="form-group">
            <label for="password">Nueva contraseña</label>
            <input type="password" required class="form-control" id="password" name="editNewPassword">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Cambiar contraseña</button>
        <br>
        <button class="btn btn-danger mt-3"><a href="deleteUser" style="color:white">Borrar Cuenta</a></button>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
    </form>
</div><?php }
}
