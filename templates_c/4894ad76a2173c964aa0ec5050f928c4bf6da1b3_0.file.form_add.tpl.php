<?php
/* Smarty version 4.2.1, created on 2022-10-11 05:02:55
  from 'C:\xampp\htdocs\WEB2\TPE1\templates\form_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344dcdfcbeac3_92578157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4894ad76a2173c964aa0ec5050f928c4bf6da1b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE1\\templates\\form_add.tpl',
      1 => 1665449625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6344dcdfcbeac3_92578157 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Agregar jugador a la lista -->
<form class="w-50 p-3" action="add" method="POST">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" required>
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
            <option value="1" selected>Atlanta Hawks</option>
            <option value="2">Boston Celtics</option>
            <option value="3">Brooklyn Nets</option>
            <option value="4">Charlotte Hornets</option>
            <option value="5">Chicago Bulls</option>
            <option value="6">Cleveland Cavaliers</option>
            <option value="7">Dallas Mavericks</option>
            <option value="8">Denver Nuggets</option>
            <option value="9">Detroit Pistons</option>
            <option value="10">Golden State Warriors</option>
            <option value="30">Houston Rockets</option>
            <option value="11">Indiana Pacers</option>
            <option value="12">Los Angeles Clippers</option>
            <option value="13">Los Angeles Lakers</option>
            <option value="14">Memphis Grizzlies</option>
            <option value="15">Miami Heat</option>
            <option value="16">Milwaukee Bucks</option>
            <option value="17">Minnesota Timberwolves</option>
            <option value="18">New Orleans Pelicans</option>
            <option value="19">New York Knicks</option>
            <option value="20">Oklahoma City Thunder</option>
            <option value="21">Orlando Magic</option>
            <option value="22">Philadelphia 76ers</option>
            <option value="23">Phoenix Suns</option>
            <option value="24">Portland Trail Blazers</option>
            <option value="25">Sacramento Kings</option>
            <option value="26">San Antonio Spurs</option>
            <option value="27">Toronto Raptors</option>
            <option value="28">Utah Jazz</option>
            <option value="29">Washington Wizards</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Numero</label>
        <input type="Number" class="form-control" id="exampleFormControlInput1" placeholder="23" name="numero" required>
    </div>
    <p>Para editar jugador, completar el formulario y despues apretar el boton 'Editar' del jugador que quiere ser editado</p>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form><?php }
}
