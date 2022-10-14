<?php
class UserModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=jugadores;charset=utf8', 'root', '');
    }
    public function getUserbyEmail($email){
        $query = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function newUser($newEmail,$newPassword){
        $password = password_hash($newPassword, PASSWORD_DEFAULT);
        $query = $this->db->prepare("INSERT INTO usuario (email, `password`) VALUES (?,?)");
        $query->execute([$newEmail,$password]);
    }
    public function changePassword($email, $newPassword){
        $password = password_hash($newPassword,PASSWORD_DEFAULT);
        $query = $this->db->prepare('UPDATE usuario SET `password`=? WHERE email = ?');
        $query->execute([$password,$email]);
    }
    public function deleteUser($user){
        $query = $this->db->prepare('DELETE FROM usuario WHERE id = ?');
        $query->execute([$user]);
    }
}