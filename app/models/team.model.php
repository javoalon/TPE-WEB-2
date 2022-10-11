<?php
class TeamModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=jugadores;charset=utf8', 'root', '');
    }
    public function getAllTeams(){
       $query = $this->db->prepare("SELECT * FROM equipo");
       $query->execute();

       $teams = $query->fetchAll(PDO::FETCH_OBJ);
       return $teams;
    }
}