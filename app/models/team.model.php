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
    public function getOneTeamPlayers($team){
        $query = $this->db->prepare("SELECT a.*,b.* FROM jugador a INNER JOIN equipo b ON a.id_equipo_fk = b.id WHERE b.id = ?");
        $query->execute([$team]);
        $teamPlayers = $query->fetchAll(PDO::FETCH_OBJ);
        return $teamPlayers;
    }
}