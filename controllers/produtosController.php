<?php
class produtosController extends controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $dados = array();
        $init = 0;
        $dados['limit'] = 10;
        if (isset($_GET['p']) && !empty($_GET['p'])) {
            $init = ($dados['limit'] * $_GET['p']) - $dados['limit'];
        }
        $produtos = new produtos();      
        $dados['quantidade'] = $produtos->getQuantidade();
        $dados['produtos'] = $produtos->getProdutos($init, $dados['limit']);
        $this->loadTemplate("produtos", $dados);
    }
    public function add(){
        $dados = array(
            "categorias" => array()
        );
        $categorias = new categorias();
        $dados['categorias'] = $categorias->getCategorias();
        if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_FILES['imagem']) && !empty($_FILES['imagem']['tmp_name'])) {
            $nome = addslashes($_POST['nome']);
            $descricao = addslashes($_POST['descricao']);
            $categoria = addslashes($_POST['categoria']);
            $preco = addslashes($_POST['preco']);
            $quantidade = addslashes($_POST['quantidade']);
            $imagem = $_FILES['imagem'];
            //Tipos de imagem permitidos
            if (in_array($imagem['type'], array('image/jpeg', 'image/png', 'image/jpg'))) {
                $ext = 'jpg';
                if ($imagem['type'] == 'image/png') {
                   $ext = 'png'; 
                }
                $md5imagem = md5(time.rand(0, 9999)).'.'.$ext;
                move_uploaded_file($imagem['tmp_name'], "http://lojavirtual:81/assets/images/".$md5imagem);
                $produtos = new produtos();
                $produtos->add($nome, $descricao, $categoria, $preco, $quantidade, $md5imagem);
                header("Location: /produtos");
            }            
        }
        $this->loadTemplate("produtos_add", $dados);
    }
}

