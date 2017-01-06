<?php
class produtos extends model{
    public function __construct() {
        parent::__construct();
    }
    public function getProdutos($init, $limit){
        $array = array();
        $sql = "SELECT *,(SELECT categorias.titulo FROM categorias WHERE categorias.id = produtos.id_categoria) AS categoria FROM produtos LIMIT $init, $limit";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    public function getQuantidade(){
        $q = 0;
        $sql = "SELECT COUNT(id)AS qtd FROM produtos";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $q = $sql['qtd'];
        }
        return $q;
    }
    public function add($nome, $descricao, $categoria, $preco, $quantidade, $imagem){
        $sql = "INSERT INTO produtos SET id_categoria = '$categoria', nome = '$nome', imagem = '$imagem', preco = '$preco', quantidade = '$quantidade', descricao = '$descricao'";
        $this->db->query($sql);
    }
}

