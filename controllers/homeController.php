<?php
use PHPMailer\PHPMailer\PHPMailer;

class homeController extends Controller {

  public function index(){
    $dados = array();
    $this->loadTemplate('home', $dados);
  }

  public function formulario(){
    $erro = false;
    require 'validacao.php';

    $erro = validaNome($_POST['name']);
    $erro = validaSobrenome($_POST['lastname']);
    $erro = validaEmail($_POST['email']);
    $erro = validaAssunto($_POST['subject']);
    $erro = validaMensagem($_POST['message'], $erro);

    if($erro != false){
      $_SESSION['form'] = array(
        'name' => $_POST['name'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
      );
      header ('Location: '.BASE_URL.'/home#contato');
      die();
    }else{
      $this->enviaEmail($_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['subject'],$_POST['message']);
    }
  }

  private function enviaEmail($nome, $lastname, $email, $subject, $message){
    $_SESSION['form'] = array(
      'name' => $_POST['name'],
      'lastname' => $_POST['lastname'],
      'email' => $_POST['email'],
      'subject' => $_POST['subject'],
      'message' => $_POST['message']
    );

    $_SESSION['contact']['message'] = '<div class="alert alert-warning text-center" role="alert">'.
    'Houve uma falha ao enviar seu email, por favor, tente novamente'.
    '</div>';
    header ('Location: '.BASE_URL.'/home#contato');
    die();
  }

}
?>
