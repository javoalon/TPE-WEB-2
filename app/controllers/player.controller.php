<?php
require_once 'app/models/player.model.php';
require_once 'app/views/player.view.php';

class PlayerController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new PlayerModel();
        $this->view = new PlayerView();
    }
    public function showPlayers(){
        $jugadores = $this->model->getAllPlayers();
        $this->view->showPlayers($jugadores);
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
        $nombre = $_POST['nombre'];
        $posicion = $_POST['posicion'];
        $equipo = $_POST['equipo'];
        $numero = $_POST['numero'];
        $this->model->editPlayer($nombre,$posicion,$equipo,$numero,$id);
        header("Location: " . BASE_URL);
    }
}