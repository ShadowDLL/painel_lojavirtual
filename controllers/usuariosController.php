<?php
class usuariosController extends controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $dados = array(
            'usuarios' => array()
        );
        $init = 0;
        $dados['limit'] = 10;
        if (isset($_GET['p']) && !empty($_GET['p'])) {
            $init = ($dados['limit'] * $_GET['p']) - $dados['limit'];
        }
        $usuarios = new usuarios();     
        $dados['quantidade'] = $usuarios->getQuantidade();  
        $dados['usuarios'] = $usuarios->getUsuarios($init, $dados['limit']);
        $this->loadTemplate("usuarios", $dados);
    }
    public function add(){
        $dados = array();
        if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
            $usuario = addslashes($_POST['usuario']);
            $senha = md5($_POST['senha']);
            $usuarios = new usuarios();
            $usuarios->add($usuario, $senha);
            header("Location: /usuarios");
        }
        $this->loadTemplate("usuarios_add", $dados);
    }
    public function edit($id){
        $dados = array(
            'usuario' => ''
        );
        $usuarios = new usuarios();
        $dados['usuario'] = $usuarios->getUsuario($id);
        if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
            $usuario = addslashes($_POST['usuario']);
            $senha = md5($_POST['senha']);
            $usuarios->edit($id, $usuario, $senha);
            header("Location: /usuarios");
        }
        $this->loadTemplate("usuarios_edit", $dados);
    }
    public function del($id){
        if (!empty($id)) {
            $usuarios = new usuarios();
            $usuarios->del($id);
        }
        header("Location: /usuarios");
    }
}

