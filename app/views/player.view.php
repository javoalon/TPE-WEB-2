<?php
require_once './librerias/smarty-4.2.1/libs/Smarty.class.php';
class PlayerView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    function showPlayers($players){
        $this->smarty->assign('players',$players);
        $this->smarty->display('players.tpl');
    }
}