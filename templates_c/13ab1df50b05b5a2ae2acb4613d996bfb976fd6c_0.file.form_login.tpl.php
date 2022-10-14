<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:53:28
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\form_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349a2180ed319_63602543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13ab1df50b05b5a2ae2acb4613d996bfb976fd6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\form_login.tpl',
      1 => 1665769974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6349a2180ed319_63602543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
        <button type="submit" class="btn btn-primary mt-3"><a href="register" style="color: white;">Registrarse</a></button>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
    </form>
</div>
<?php }
}
