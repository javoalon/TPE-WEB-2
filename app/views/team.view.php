<?php
require_once './librerias/smarty-4.2.1/libs/Smarty.class.php';
class TeamView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    function showTeams($teams){
        $this->smarty->assign('teams',$teams);
        $this->smarty->display('teamsList.tpl');
    }
    function showOneTeamPlayers($team){
        $this->smarty->assign('team',$team);
        $this->smarty->display('oneTeam.tpl');
    }
}