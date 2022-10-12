<?php
require_once 'app/views/team.view.php';
require_once 'app/models/team.model.php';

class TeamController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new TeamModel();
        $this->view = new TeamView();
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
        header("Location: http://localhost/WEB2/TPE1/equipos");
    }
    function deleteTeam($id){
        $this->model->deleteTeam($id);
        header("Location: http://localhost/WEB2/TPE1/equipos");
    }
    function editTeam($id){
        $team = $_POST['newTeam'];
        $this->model->editTeam($team,$id);
        header("Location: http://localhost/WEB2/TPE1/equipos");
    }
}