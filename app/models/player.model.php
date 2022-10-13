<?php

class PlayerModel
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=jugadores;charset=utf8', 'root', '');
    }
    public function getAllPlayers()
    {
        $query = $this->db->prepare("SELECT a.*,b.* FROM jugador a INNER JOIN equipo b ON a.id_equipo_fk = b.id");
        $query->execute();

        $players = $query->fetchAll(PDO::FETCH_OBJ);
        return $players;
    }
    public function addPlayer($nombre, $posicion, $equipo, $numero)
    {
        $query = $this->db->prepare("INSERT INTO jugador (nombre, posicion, id_equipo_fk, numero) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre, $posicion, $equipo, $numero]);
    }
    public function deletePlayer($id)
    {
        $query = $this->db->prepare('DELETE FROM jugador WHERE id_pk = ?');
        $query->execute([$id]);
    }
    public function editPlayer($nombre, $posicion, $equipo, $numero, $id)
    {
        $query = $this->db->prepare('UPDATE jugador SET nombre = ?,posicion=?, id_equipo_fk=?, numero=? WHERE id_pk = ?');
        $query->execute([$nombre, $posicion, $equipo, $numero, $id]);
    }
    public function orderBy($filtro)
    {
        switch ($filtro) {
            case 'nombre':
                $query = $this->db->prepare("SELECT a.*,b.* FROM jugador a INNER JOIN equipo b ON a.id_equipo_fk = b.id ORDER BY a.nombre ASC;");
                $query->execute();

                $players = $query->fetchAll(PDO::FETCH_OBJ);
                return $players;
                break;
            case 'posicion':
                $query = $this->db->prepare("SELECT a.*,b.* FROM jugador a INNER JOIN equipo b ON a.id_equipo_fk = b.id ORDER BY a.posicion ASC;");
                $query->execute();

                $players = $query->fetchAll(PDO::FETCH_OBJ);
                return $players;
                break;
            case 'equipo':
                $query = $this->db->prepare("SELECT a.*,b.* FROM jugador a INNER JOIN equipo b ON a.id_equipo_fk = b.id ORDER BY b.equipo ASC;");
                $query->execute();

                $players = $query->fetchAll(PDO::FETCH_OBJ);
                return $players;
                break;
            case 'numero':
                $query = $this->db->prepare("SELECT a.*,b.* FROM jugador a INNER JOIN equipo b ON a.id_equipo_fk = b.id ORDER BY a.numero ASC;");
                $query->execute();

                $players = $query->fetchAll(PDO::FETCH_OBJ);
                return $players;
                break;
        }
    }
}
