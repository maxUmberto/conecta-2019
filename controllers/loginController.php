<?php

class loginController extends Controller{

    public function isLogged(){
        if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
            header('Location:'.BASE_URL.'/admin');
            die();
        }
        return false;
    }

    public function index() {
        $this->isLogged();
        include 'views/admin/login/login.php';
    }

    public function logar(){
        $this->isLogged();
        $erro = false;
        require 'validacao.php';

        $erro = validaUsuario($_POST['user'],$erro);
        $erro = validaSenha($_POST['password'],$erro);

        if($erro != false){
            $_SESSION['form_login'] = array(
                'usuario' => $_POST['usuario'],
            );
            header ('Location: '.BASE_URL.'/login');
            die();
        }else{
            if($_POST['user'] === 'conecta' && $_POST['password'] === 'conecta'){
                $_SESSION['logged'] = true;
                header('Location:'.BASE_URL.'/admin');
                die();
            }else{
                $_SESSION['login']['error'] = '<div class="alert alert-warning text-center" role="alert">'.
                                                    'Usuário ou senha inválidos' .
                                                    '</div>';
                header('Location:'.BASE_URL.'/login');
                die();
            }
        }
    }

    public function logout(){
        unset($_SESSION['logged']);
        header('Location:' . BASE_URL . '/login');
        die();
    }
}
?>