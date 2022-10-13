<?php
require_once 'app/views/team.view.php';
require_once 'app/models/team.model.php';
require_once 'app/helpers/login.helper.php';
require_once 'app/models/user.model.php';

class TeamController{
    private $model;
    private $view;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->model = new TeamModel();
        $this->view = new TeamView();
        $loginHelper = new LoginHelper();
        $loginHelper->checkLoggedIn();
    }
    public function showTeams(){
        $teams = $this->model->getAllTeams();
        $user = $this->userModel->getUserByEmail($_SESSION['USER_EMAIL']);
        $this->view->showTeams($teams,$user);
    }
    public function showOneTeam($team){
        $teams = $this->model->getOneTeamPlayers($team);
        $this->view->showOneTeamPlayers($teams);
    }
    function addTeam(){
        $loginHelper = new LoginHelper();
        $loginHelper->checkAdmin();
        $newTeam = $_POST['newTeam'];
        $this->model->addTeam($newTeam);
        header("Location: " . BASE_URL . "/equipos");
    }
    function deleteTeam($id){
        $loginHelper = new LoginHelper();
        $loginHelper->checkAdmin();
        $this->model->deleteTeam($id);
        header("Location: " . BASE_URL . "/equipos");
    }
    public function showFormEditTeam($id){
        $loginHelper = new LoginHelper();
        $loginHelper->checkAdmin();
        $this->view->showFormEditTeam($id);
    }
    function editTeam($id){
        $loginHelper = new LoginHelper();
        $loginHelper->checkAdmin();
        $teamName = $_POST['editTeam'];
        $this->model->editTeam($teamName,$id);
        header("Location: " . BASE_URL . "equipos");
    }
}