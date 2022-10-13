{include "header.tpl"}
<br>
<!--Formulario para editar al equipo-->
<form action="editTeam/{$id}" method="POST">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nombre del Equipo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="editTeam">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Editar Equipo</button>
</form>