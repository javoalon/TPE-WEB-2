<?php
require_once 'app/controllers/player.controller.php';
require_once 'app/controllers/team.controller.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'jugadores';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
$params = explode('/', $action);   
switch ($params[0]) {
    case 'jugadores':
        $playerController = new PlayerController();
        $playerController->showPlayers();
        break;
    case 'add':
        $playerController = new PlayerController();
        $playerController->addPlayer();
        break;
    case 'delete':
        $playerController = new PlayerController();
        $id = $params[1];
        $playerController->deletePlayer($id);
        break;
    case 'edit':
        $playerController = new PlayerController();
        $id = $params[1];
        $playerController->editPlayer($id);
        break;
    case 'equipos':
        $teamController = new TeamController();
        $teamController->showTeams();
        break;
    default:
        echo "404 not found";
        break;
}