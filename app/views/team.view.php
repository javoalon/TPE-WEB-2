<?php
require_once './librerias/smarty-4.2.1/libs/Smarty.class.php';
class TeamView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    function showTeams($teams,$user){
        $this->smarty->assign('teams',$teams);
        $this->smarty->assign('user',$user);
        $this->smarty->display('teamsList.tpl');
    }
    function showOneTeamPlayers($team){
        $this->smarty->assign('team',$team);
        $this->smarty->display('oneTeam.tpl');
    }
    function showFormEditTeam($id){
        $this->smarty->assign('id',$id);
        $this->smarty->display('form_edit_team.tpl');
    }
}