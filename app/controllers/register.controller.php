<?php
require_once './app/models/user.model.php';
require_once './app/views/register.view.php';
class RegisterController{
    private $model;
    private $view;
    public function __construct(){
        $this->model = new UserModel();
        $this->view = new RegisterView();
        $loginHelper = new LoginHelper();
        $loginHelper->checkIsLogged();
    }
    public function showFormRegister(){
        $this->view->showRegisterForm();
    }
    public function addNewUser(){
        $email = $_POST['newEmail'];
        $password = $_POST['newPassword'];
        $password2 = $_POST['newPassword2'];
        if($password==$password2){
            $this->model->newUser($email,$password);
            header("Location: " . "login");
        }else{
            $this->view->showRegisterForm("Las contraseñas no son iguales.");
        }
    }
}