<?php
class categoriasController extends controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $dados = array();
        $categorias = new categorias();
        $dados['categorias'] = $categorias->getCategorias();       
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

