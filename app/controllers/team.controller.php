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
}