<?php

class Core{
  public function run(){
    //quebra a url em duas partes, quebrando a partir de index.php
    $url = explode('index.php', $_SERVER['PHP_SELF']);
    //pega o ultimo elemento do array, ou seja, o que vem depois de index.php
    $url = end($url);

    //Array vazio para os parametros. Caso algum paramentro
    //seja passado, ele será armazenado nesse array
    $params = array();

    if(!empty($url)){
      $url = explode('/', $url);

      //ao dar o explode na /, o primeiro elemento do array acaba sendo
      //um elemento vazio, damos um array shift para removermos esse primeiro elemento
      array_shift($url);

      $currentController = $url[0].'Controller';

      //o primeiro elemento do array é a nossa controller
      //uma vez que já pegamos nossa controller, removemos o primeiro elemento
      array_shift($url);

      //confere se alguma action foi passada
      if(isset($url[0])){
        $currentAction = $url[0];
        //o primeiro elemento aqui do array é a action
        //removemos ela e agora ficamos somente com os dados, se existirem
        array_shift($url);
      }else{
        $currentAction = 'index';
      }

      //caso existam dados, armazenamos eles
      if(count($url) > 0){
        $params = $url;
      }

    } else {
      //Valores padrões para caso não tenha nada na URL
      $currentController = 'homeController';
      $currentAction = 'index';
    }

    require_once 'core/controller.php';

    //instancia a classe que o usuario quer acessar
    $c = new $currentController();

    //seguinte, essa função diz que eu quero acessar a $currentAction
    //da classe $c passando como parâmetro os argumentos salvo em $params
    call_user_func_array(array($c, $currentAction), $params);
  }
}

?>
