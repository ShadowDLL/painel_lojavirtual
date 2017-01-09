<?php
class usuarios extends model{
    public function __construct() {
        parent::__construct();
    }
    public function getUsuarios($init, $limit){
        $array = array();
        $sql = "SELECT * FROM admins LIMIT $init, $limit";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    public function getQuantidade(){
        $q = 0;
        $sql = "SELECT COUNT(id)AS qtd FROM usuarios";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $q = $sql['qtd'];
        }
        return $q;
    }
    public function getUsuario($id){
        $array = array();
        if (!empty($id)) {
           $sql = "SELECT * FROM admins WHERE id = '$id'";
           $sql = $this->db->query($sql);
           if ($sql->rowCount() > 0) {
               $array = $sql->fetch();
           }
        }
        return $array;
    }
    public function add($usuario, $senha){
        if (!empty($usuario) && !empty($senha)) {
            $sql = "INSERT INTO admins SET usuario = '$usuario', senha = '$senha'";
            $this->db->query($sql);
        }
    }
    public function edit($id, $usuario, $senha){
        if (!empty($usuario) && !empty($senha)) {
            $sql = "UPDATE admins SET usuario = '$usuario', senha = '$senha' WHERE id = '$id'";
            $this->db->query($sql);
        }
    }
    public function del($id){
        if (!empty($id)) {
            $sql = "DELETE FROM admins WHERE id = '$id'";
            $this->db->query($sql);
        }
    }
}

