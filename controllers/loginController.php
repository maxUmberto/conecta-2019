<?php

class loginController extends Controller{
    public function index()    {
        include 'views/admin/login/login.php';
    }

    public function logar(){
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
                header('Location: /admin');
                die();
            }
        }
    }
}
?>