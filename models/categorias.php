<?php
class categorias extends model{
    public function __construct() {
        parent::__construct();
    }
    public function getCategorias($init = 0, $limit = 10){
        $array = array();
        $sql = "SELECT * FROM categorias LIMIT $init, $limit";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    public function getCategoria($id){
        $array = array();
        $sql = "SELECT * FROM categorias WHERE id = '$id'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
    public function getQuantidade(){
        $q = 0;
        $sql = "SELECT COUNT(id)AS qtd FROM categorias";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $q = $sql['qtd'];
        }
        return $q;
    }
    public function add($categoria){
        $sql = "INSERT INTO categorias SET titulo = '$categoria'";
        $this->db->query($sql);
    }
    public function edit($id, $titulo){
        $sql = "UPDATE categorias SET titulo = '$titulo' WHERE id = '$id'";
        $this->db->query($sql);
    }
    public function del($id){
        $sql = "DELETE FROM produtos WHERE id_categoria = '$id'";
        $this->db->query($sql);
        $sql = "DELETE FROM categorias WHERE id = '$id'";
        $this->db->query($sql);
    }
}
