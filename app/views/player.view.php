<?php
require_once './librerias/smarty-4.2.1/libs/Smarty.class.php';
class PlayerView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    function showPlayers($players,$teams,$user){
        $this->smarty->assign('players',$players);
        $this->smarty->assign('teams',$teams);
        $this->smarty->assign('user',$user);
        $this->smarty->display('players.tpl');
    }
    function showPlayerToEdit($players,$teams,$id){
        $this->smarty->assign('players',$players);
        $this->smarty->assign('teams',$teams);
        $this->smarty->assign('id',$id);
        $this->smarty->display('form_edit_player.tpl');
    }
}