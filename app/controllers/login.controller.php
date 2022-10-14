<?php
require_once './app/models/user.model.php';
require_once './app/views/login.view.php';

class LoginController{
    private $model;
    private $view;
    public function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
        $loginHelper = new LoginHelper();
        $loginHelper->checkIsLogged();
    }
    public function showFormLogin(){
        $this->view->showFormLogin();
    }
    public function validateUser() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model->getUserbyEmail($email);
        if(isset($user->password)){ //si ponen un usuario que no existe,al buscar la pw, daba error.
            if(password_verify($password,$user->password)){
                session_start();
                $_SESSION['USER_ID'];
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['IS_LOGGED'] = true;
                header("Location: " . BASE_URL);
            }else {
            $this->view->showFormLogin("El usuario o la contraseña no existe.");
            }
        }else {
        $this->view->showFormLogin("El usuario o la contraseña no existe.");
        }
    }
    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
    public function showFormEditPw(){
        $this->view->showFormEditPw();
    }
    public function changePassword(){
        $email = $_POST['emailEditPw'];
        if($email==$_SESSION['USER_EMAIL']){ //verificar que sea la misma cuenta que esta activa con la que se quiere cambiar la pw
            $user = $this->model->getUserbyEmail($email);
            $oldPassword = $_POST['editPassword'];
            $newPassword = $_POST['editNewPassword'];
            if(password_verify($oldPassword,($user->password))){
                $this->model->changePassword($email,$newPassword);
                header("Location: " . BASE_URL);
            }else{
                $this->view->showFormEditPw("La contraseña actual no es la misma");
            }
        } else{
            $this->view->showFormEditPw("Ese no es el email de esta cuenta...");
        }
    }
    public function deleteUser(){
        $user = $this->model->getUserbyEmail($_SESSION['USER_EMAIL']);
        $this->model->deleteUser($user->id);
        session_destroy();
        header("Location: " . BASE_URL);
    }
}