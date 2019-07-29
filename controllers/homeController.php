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

    $erro = validaNome($_POST['name'], 'error', $erro);
    $erro = validaSobrenome($_POST['lastname'], $erro);
    $erro = validaEmail($_POST['email'], 'error', $erro);
    $erro = validaAssunto($_POST['subject'], $erro);
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

  public function inscricao(){
    $inscricao = new Inscricao();
    $erro = false;
    require 'validacao.php';

    $erro = validaNome($_POST['name'], 'inscricao', $erro);
    $erro = validaEmail($_POST['email'], 'inscricao', $erro, $inscricao);

    if(isset($_POST['instituicao'])){
      $erro = validaInstituicao($_POST['instituicao'], $erro);
    }else{
      $_SESSION['inscricao']['instituicao'] = 'Selecione uma instituição';
      $erro = true;
    }

    if(isset($_POST['sex'])){
      $erro = validaSexo($_POST['sex'], $erro);
    }else{
      $_SESSION['inscricao']['sex'] = 'Selecione um sexo';
      $erro = true;
    }

    if(isset($_POST['matricula-chechbox']) && $_POST['matricula'] != ''){
      $_SESSION['inscricao']['matricula'] = 'Se não é aluno, o campo matrícula deve ficar em branco';
      $erro = true;
    }else if(!isset($_POST['matricula-checkbox'])){
      $erro = validaMatricula($_POST['matricula'], $erro, $inscricao);
    }

    if($erro != false){
      $_SESSION['inscricao_'] = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'instituicao' => $_POST['instituicao'],
        'sex' => $_POST['sex'],
        'matricula' => $_POST['matricula'],
      );
      header ('Location: '.BASE_URL.'/home#inscricao');
      die();
    }else{
      echo 'tudo okay ate aqui';exit;

      if($inscricao->salvaInscricao()){
        echo 'foi';exit;
      }
    }
  }

  private function enviaEmail($name, $lastname, $email, $subject, $message){
    date_default_timezone_set('Etc/UTC');
    require 'vendor/autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'email.ufrrj.br';
    $mail->Port = 25;
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('conectaufrrj@gmail.com', 'Conecta');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('conectaufrrj@gmail.com', 'Contato Conecta');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if($mail->addReplyTo($email, $name)) {
      $mail->Subject = $subject;
      //Keep it simple - don't use HTML
      $mail->isHTML(true);
      //Build a simple message body
      $mail->Body = '<b>Nome: </b>'.$name.' '.$lastname.'<br />'.
                    '<b>Assunto: </b>'.$subject.'<br />'.
                    '<b>Mensagem: </b>'.$message;

      if (!$mail->send()) {
          //The reason for failing to send will be in $mail->ErrorInfo
          //but you shouldn't display errors to users - process the error, log it on your server.
          //echo $mail->ErrorInfo;exit;
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
      } else {
        $_SESSION['contact']['message'] = '<div class="alert alert-success text-center" role="alert">'.
                                          'Mensagem enviada! Entraremos em contato em breve'.
                                          '</div>';
        header ('Location: '.BASE_URL.'/home#contato');
        die();
      }//Fim do if mail->send()
    }//fim do if addReplyTo
  }//fim da enviaEmail

}
?>
