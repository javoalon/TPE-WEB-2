<?php
class TeamModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=jugadores;charset=utf8', 'root', '');
    }
    public function getAllTeams(){
       $query = $this->db->prepare("SELECT * FROM equipo");
       $query->execute();
       return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function getOneTeamPlayers($team){
        $query = $this->db->prepare("SELECT a.*,b.* FROM jugador a INNER JOIN equipo b ON a.id_equipo_fk = b.id WHERE b.id = ?");
        $query->execute([$team]);
        $teamPlayers = $query->fetchAll(PDO::FETCH_OBJ);
        return $teamPlayers;
    }
    public function addTeam($team){
        $query = $this->db->prepare("INSERT INTO equipo(equipo) VALUES (?)");
        $query->execute([$team]);
    }
    public function deleteTeam($id){
        $query = $this->db->prepare('DELETE FROM jugador WHERE id_equipo_fk= ?'); //para borrar un equipo, primero hay que borrar a los jugadores que esten en el.
        $query->execute([$id]);
        $query = $this->db->prepare('DELETE FROM equipo WHERE id= ?');
        $query->execute([$id]);
    }
    public function editTeam($team,$id){
        $query = $this->db->prepare('UPDATE equipo SET equipo=? WHERE id = ?');
        $query->execute([$team,$id]);
    }
}