{include "header.tpl"}
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
        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
    </form>
</div>
