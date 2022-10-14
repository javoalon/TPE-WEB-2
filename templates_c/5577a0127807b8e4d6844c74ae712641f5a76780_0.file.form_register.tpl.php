<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:39:13
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\form_register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63499ec1626875_15598731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5577a0127807b8e4d6844c74ae712641f5a76780' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\form_register.tpl',
      1 => 1665768867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63499ec1626875_15598731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="registerUser">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="newEmail" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" required class="form-control" id="password" name="newPassword">
        </div>
        <div class="form-group">
            <label for="password">Repetir contraseña</label>
            <input type="password" required class="form-control" id="password" name="newPassword2">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Crear cuenta</button>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
    </form>
</div>
<?php }
}
