{include "header.tpl"}
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
        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
    </form>
</div>