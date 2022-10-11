<?php
require_once 'app/controllers/player.controller.php';
require_once 'app/controllers/team.controller.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
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
    case '1':
    case '2':
    case '3':
    case '4':
    case '5':
    case '6':
    case '7':
    case '8':
    case '9':
    case '10':
    case '11':
    case '12':
    case '13':
    case '14':
    case '15':
    case '16':
    case '17':
    case '18':
    case '19':
    case '20':
    case '21':
    case '22':
    case '23':
    case '24':
    case '25':
    case '26':
    case '27':
    case '28':
    case '29':
    case '30':
        $teamController = new TeamController();
        $team = $params[0];
        $teamController->showOneTeam($team);
        break;
    default:
        echo "404 not found";
        break;
}
