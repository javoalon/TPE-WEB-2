<!--Formulario para el edit de jugador-->
{include "header.tpl"}
<form class="w-50 p-3" action="edit/{$id}" method="POST">
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
            {foreach from=$teams item=$team}
                <option value="{$team->id}">{$team->equipo}</option>
            {/foreach}
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Numero</label>
        <input type="Number" class="form-control" id="exampleFormControlInput1" placeholder="23" name="numero" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Editar</button>
    <button class="btn btn-danger"><a href="jugadores" style="color: white;">Volver</a></button>
</form>