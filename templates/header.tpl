<!DOCTYPE html>
<html lang="en">
<head>
    <base href={BASE_URL}>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Jugadores NBA</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-primary">
            <a class="navbar-brand" href="jugadores">
            <img src="images/NBAlogo.png" width="65" height="30" class="d-inline-block align-top" alt="">
                Jugadores
            </a>
            <a class="navbar-brand" href="equipos">
                Equipos
            </a>
            {if !isset($smarty.session.IS_LOGGED)}
                <a class="navbar-brand" href="login">Login</a>
            {else}
                <a class="navbar-brand" href="logout">Logout</a>
            {/if}
        </nav>
    </header>
    <main>