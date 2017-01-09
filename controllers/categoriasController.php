<?php
class categoriasController extends controller{
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
        $categorias = new categorias();     
        $dados['quantidade'] = $categorias->getQuantidade();     
        $dados['categorias'] = $categorias->getCategorias($init, $dados['limit']);       
        $this->loadTemplate("categorias", $dados);
    }
    public function add(){
        $dados = array();
        if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $categoria = addslashes($_POST['titulo']);
            $categorias = new categorias();
            $categorias->add($categoria); 
            header("Location: /categorias");
        }
        $this->loadTemplate("categorias_add", $dados);
    }
    public function edit($id){
        $dados = array();
        if (!empty($id)) {
            $id = addslashes($id);
            $categorias = new categorias();
            if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                $categoria = addslashes($_POST['titulo']);
                $categorias->edit($id, $categoria);
                header("Location: /categorias");
            }
            $dados['categoria'] = $categorias->getCategoria($id);
        
        }        
       $this->loadTemplate("categorias_edit", $dados);         
    }
    public function del($id){
        if (!empty($id)) {
            $id = addslashes($id);
            $categorias = new categorias();
            $categorias->del($id);
            header("Location: /categorias");
        }
    }
}

