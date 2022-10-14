<?php
/* Smarty version 4.2.1, created on 2022-10-14 17:34:16
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\form_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63498178bc7816_08820854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4894ad76a2173c964aa0ec5050f928c4bf6da1b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\form_add.tpl',
      1 => 1665761541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63498178bc7816_08820854 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Agregar jugador a la lista -->
<?php if (($_SESSION['IS_LOGGED']) == true) {?> <!--Si la session es iniciada, va a imprimir el formulario-->
    <form class="w-50 p-3" action="add" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" required
                placeholder="Kobe Bryant">
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
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
<?php }
}
}
