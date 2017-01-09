<?php
class vendas extends model{
    public function __construct() {
        parent::__construct();
    }
    public function getVenda($id){
        $array = array();
        $sql = "SELECT vendas.id, usuarios.nome, vendas.valor, pagamentos.nome AS pg_nome, vendas.status_pg, vendas.endereco, vendas.pg_link FROM vendas LEFT JOIN usuarios ON usuarios.id = vendas.id_usuario LEFT JOIN pagamentos ON pagamentos.id = vendas.forma_pg WHERE vendas.id = '$id'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
    public function getProdutos($id){
        $array = array();
        $sql = "SELECT id_produto, quantidade FROM vendas_produto WHERE  id_venda = '$id';";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $produtos = $sql->fetchAll();
            $p = new produtos();
            foreach ($produtos as $produto) {
                $pinfo = $p->getProduto($produto['id_produto']);
                $array[] = array(
                    'id' => $pinfo['id'],
                    'quantidade' => $produto['quantidade'],
                    'nome' => $pinfo['nome'],
                    'imagem' => $pinfo['imagem'],
                    'preco' => $pinfo['preco']
                );
            }
        }
        return $array;
    }
    public function getQuantidade(){
        $q = 0;
        $sql = "SELECT COUNT(id)AS qtd FROM vendas";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $q = $sql['qtd'];
        }
        return $q;
    }
    public function getVendas($init, $limit){
        $array = array();
        $sql = "SELECT vendas.id, usuarios.nome, vendas.valor, pagamentos.nome AS pg_nome, vendas.status_pg FROM vendas LEFT JOIN usuarios ON usuarios.id = vendas.id_usuario LEFT JOIN pagamentos ON pagamentos.id = vendas.forma_pg LIMIT $init, $limit";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    
}

