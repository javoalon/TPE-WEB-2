<!--Formulario para agregar un equipo-->
{if ($user->rol)=="Admin"}
    <form action="addTeam" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre del Equipo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="newTeam">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Agregar Equipo</button>
    </form>
{/if}