<?php
class vendasController extends controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $dados = array(
            'vendas' => array()
        );
        $init = 0;
        $dados['limit'] = 10;
        if (isset($_GET['p']) && !empty($_GET['p'])) {
            $init = ($dados['limit'] * $_GET['p']) - $dados['limit'];
        }
        $vendas = new vendas();
        $dados['quantidade'] = $vendas->getQuantidade();
        $dados['vendas'] = $vendas->getVendas($init, $dados['limit']);  
        
        $this->loadTemplate("vendas", $dados);
    }
    public function ver($id){
        $dados = array(
            'venda' => array(),
            'produtos' => array()
        );
        if (!empty($id)) {
            $venda = new vendas();
            $dados['venda'] = $venda->getVenda($id);
            $dados['produtos'] = $venda->getProdutos($id);
        }
        $this->loadTemplate("vendas_ver", $dados);
    }
}

