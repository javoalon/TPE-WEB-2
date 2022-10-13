<?php
require_once 'app/models/user.model.php';
class LoginHelper {
    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) { //si el usuario no esta logeado, lo devuelve al form de login
            header("Location: " . BASE_URL . 'login');
            die();
        }
    }
    public function checkAdmin(){
        $this->model = new UserModel();
        $user = $this->model->itsAdmin($_SESSION['USER_EMAIL']);
        if(($user->rol)!="Admin"){
            header("Location: " . BASE_URL . 'jugadores');
            die();
        }
    }
}