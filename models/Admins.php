<?php
class Admins extends model{
    public function __construct() {
        parent::__construct();
    }
    public function isLogged(){
        if (isset($_SESSION['admlogin']) && !empty($_SESSION['admlogin'])) {
            return true;
        }
        else{
            return false;
        }
    }
    public function login($usuario, $senha){
        $sql = "SELECT * FROM admins WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0){
            $sql = $sql->fetch();
            $_SESSION['admlogin'] = $sql['id'];
            return true;
        }
        else{
            return false;
        }
    }
}

