<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:01:30
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\form_edit_player.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348446a0f4f79_31906157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4c5f5aa55bd4550cba97aa372e1487bb85ac02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\form_edit_player.tpl',
      1 => 1665680488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6348446a0f4f79_31906157 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Formulario para el edit de jugador-->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="w-50 p-3" action="edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" required placeholder="Kobe Bryant">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Posicion</label>
        <select class="form-control" id="exampleFormControlSelect1" name="posicion">
            <option value="Base">Base</option>
            <option value="Escolta">Escolta</option>
            <option value="Alero">Alero</option>
            <option value="Ala-Pivot">Ala-Pivot</option>
            <option value="Pivot">Pivot</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Equipo</label>
        <select class="form-control" id="exampleFormControlSelect1" name="equipo">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value->equipo;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Numero</label>
        <input type="Number" class="form-control" id="exampleFormControlInput1" placeholder="23" name="numero" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Editar</button>
    <button class="btn btn-danger"><a href="jugadores" style="color: white;">Volver</a></button>
</form><?php }
}
