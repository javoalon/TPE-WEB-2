<?php

class LoginHelper {
    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) { //si el usuario no esta logeado, lo devuelve al form de login
            header("Location: " . BASE_URL . 'login');
            die();
        }
    } 
}