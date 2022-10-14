<?php
require_once './librerias/smarty-4.2.1/libs/Smarty.class.php';
class RegisterView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    function showRegisterForm($error = null){
        $this->smarty->assign('error',$error);
        $this->smarty->display('form_register.tpl');
    }
}