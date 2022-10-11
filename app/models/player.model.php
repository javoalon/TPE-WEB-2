<?php

class PlayerModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=jugadores;charset=utf8', 'root', '');
    }
    public function getAllPlayers(){
        $query = $this->db->prepare("SELECT a.*,b.* FROM jugador a INNER JOIN equipo b ON a.id_equipo_fk = b.id");
        $query->execute();

        $players = $query->fetchAll(PDO::FETCH_OBJ);
        return $players;
    }
    public function addPlayer($nombre, $posicion, $equipo, $numero){
        $query = $this->db->prepare("INSERT INTO jugador (nombre, posicion, id_equipo_fk, numero) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre, $posicion, $equipo, $numero]);
        return $this->db->lastInsertId();
    }
    public function deletePlayer($id){
        $query = $this->db->prepare('DELETE FROM jugador WHERE id_pk = ?');
        $query->execute([$id]);
    }
    public function editPlayer($nombre, $posicion, $equipo, $numero, $id){
        $query = $this->db->prepare('UPDATE jugador (nombre, posicion, id_equipo_fk, numero) SET (?, ?, ?, ?) WHERE id_pk = ?');
        $query->execute([$nombre, $posicion, $equipo, $numero, $id]);
    }
}