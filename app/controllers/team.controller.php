<?php
require_once 'app/views/team.view.php';
require_once 'app/models/team.model.php';
require_once 'app/helpers/login.helper.php';

class TeamController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new TeamModel();
        $this->view = new TeamView();
        $loginHelper = new LoginHelper();
        $loginHelper->checkLoggedIn();
    }
    public function showTeams(){
        $teams = $this->model->getAllTeams();
        $this->view->showTeams($teams);
    }
    public function showOneTeam($team){
        $teams = $this->model->getOneTeamPlayers($team);
        $this->view->showOneTeamPlayers($teams);
    }
    function addTeam(){
        $newTeam = $_POST['newTeam'];
        $this->model->addTeam($newTeam);
        header("Location: " . BASE_URL . "/equipos");
    }
    function deleteTeam($id){
        $this->model->deleteTeam($id);
        header("Location: " . BASE_URL . "/equipos");
    }
    function editTeam($id){
        $team = $_POST['newTeam'];
        $this->model->editTeam($team,$id);
        header("Location: http://localhost/WEB2/TPE1/equipos");
    }
}