<?php
class LoginHelper
{
    public function checkIsLogged(){
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            $_SESSION['IS_LOGGED'] = false;
        }
    }
    public function checkAdmin(){
        if (!isset($_SESSION['IS_LOGGED'])||($_SESSION['IS_LOGGED'])==false) {
            header("Location: " . BASE_URL);
            die;
        }
    }
}
