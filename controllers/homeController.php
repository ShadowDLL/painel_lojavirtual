<?php

class homeController extends controller
{
    public function __construct() {
        parent::__construct();
        $adm = new Admins();
        if (!$adm->isLogged()) {
            header("Location: /login");
        }    
    }
    public function index(){
        $dados = array();
        $this->loadTemplate("home", $dados);            
    }

}