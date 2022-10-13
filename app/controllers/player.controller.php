<?php
require_once 'app/models/player.model.php';
require_once 'app/views/player.view.php';
require_once 'app/models/team.model.php';
require_once 'app/helpers/login.helper.php';

class PlayerController{
    private $model;
    private $view;
    private $modelTeam;

    public function __construct(){
        $this->model = new PlayerModel();
        $this->view = new PlayerView();
        $loginHelper = new LoginHelper();
        $loginHelper->checkLoggedIn();
    }
    public function showPlayers(){
        $this->modelTeam = new TeamModel();
        $teams = $this->modelTeam->getAllTeams();
        $jugadores = $this->model->getAllPlayers();
        $this->view->showPlayers($jugadores,$teams);
    }
    function addPlayer(){
        $nombre = $_POST['nombre'];
        $posicion = $_POST['posicion'];
        $equipo = $_POST['equipo'];
        $numero = $_POST['numero'];

        $this->model->addPlayer($nombre,$posicion,$equipo,$numero);
        header("Location: " . BASE_URL);
    }
    function deletePlayer($id){
        $this->model->deletePlayer($id);
        header("Location: " . BASE_URL);
    }
    function editPlayer($id){
        var_dump($_POST['nombre']);
        $nombre = $_POST['nombre'];
        $posicion = $_POST['posicion'];
        $equipo = $_POST['equipo'];
        $numero = $_POST['numero'];
        $this->model->editPlayer($nombre,$posicion,$equipo,$numero,$id);
        header("Location: " . BASE_URL);
    }
    function orderBy($filtro){
        $this->modelTeam = new TeamModel();
        $teams = $this->modelTeam->getAllTeams();
        $jugadoresOrdenados = $this->model->orderBy($filtro);
        $this->view->showPlayers($jugadoresOrdenados, $teams);
    }
}