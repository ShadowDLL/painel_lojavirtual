<?php
class loginController extends controller {
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $dados = array(
            'aviso' => ''
        );
        if (isset($_POST['usuario'])) {
            $usuario = addslashes($_POST['usuario']);
            $senha = md5($_POST['senha']);
            $admin = new Admins();
            if ($admin->login($usuario, $senha)) {
                header("Location: /home");
            }
            else{
                $dados['aviso'] = "Usuário e/ou senha inválidos!";
                $this->loadView("login", $dados);
            }
        }
        else{
            $this->loadView("login", $dados);
        }
    }
    public function logout(){
        unset($_SESSION['admlogin']);
        header("Location: /login");
    }
}

