<?php
require_once 'app/models/player.model.php';
require_once 'app/views/player.view.php';
require_once 'app/models/team.model.php';
require_once 'app/helpers/login.helper.php';
require_once 'app/models/user.model.php';

class PlayerController{
    private $model;
    private $view;
    private $modelTeam;
    private $modelUser;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->model = new PlayerModel();
        $this->view = new PlayerView();
        $loginHelper = new LoginHelper();
        $loginHelper->checkLoggedIn();
    }
    public function showPlayers(){
        $this->modelTeam = new TeamModel();
        $teams = $this->modelTeam->getAllTeams();
        $jugadores = $this->model->getAllPlayers();
        $user = $this->userModel->getUserByEmail($_SESSION['USER_EMAIL']);
        $this->view->showPlayers($jugadores,$teams,$user);
    }
    function addPlayer(){
        $loginHelper = new LoginHelper();
        $loginHelper->checkAdmin();
        $nombre = $_POST['nombre'];
        $posicion = $_POST['posicion'];
        $equipo = $_POST['equipo'];
        $numero = $_POST['numero'];

        $this->model->addPlayer($nombre,$posicion,$equipo,$numero);
        header("Location: " . BASE_URL);
    }
    function deletePlayer($id){
        $loginHelper = new LoginHelper();
        $loginHelper->checkAdmin();
        $this->model->deletePlayer($id);
        header("Location: " . BASE_URL);
    }
    function showPlayerToEdit($id){
        $loginHelper = new LoginHelper();
        $loginHelper->checkAdmin();
        $this->modelTeam = new TeamModel();
        $teams = $this->modelTeam->getAllTeams();
        $jugadores = $this->model->getAllPlayers();
        $this->view->showPlayerToEdit($jugadores,$teams,$id);
    }
    function editPlayer($id){
        $loginHelper = new LoginHelper();
        $loginHelper->checkAdmin();
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
        $user = $this->userModel->getUserByEmail($_SESSION['USER_EMAIL']);
        $this->view->showPlayers($jugadoresOrdenados, $teams,$user);
    }
}