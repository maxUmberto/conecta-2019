<?php
session_start();

require 'config.php';

//função que automaticamente já chama as classes instanciadas
//sem a necessidade de um require
spl_autoload_register(function ($class){
  //vai procurar se a classe chamada é uma controllers
  //Por exemplo, ele vai ver se existe a palavra Controller na class buscada
  //como por exemplo, homeController, e o -1 significa que ele vai começar
  //a buscar a partir da primeira letra
  if(strpos($class, 'Controller') > -1){
    //vê se o arquivo existe, e caso exista faz uma requisição do mesmo
    if(file_exists('controllers/'.$class.'.php')){
      require_once 'controllers/'.$class.'.php';
    }
  //Se não for um controller, partimos do princípio que é uma model
  //logo verificamos se o arquivo existe na pasta de modesl
  } else if(file_exists('models/'.$class.'.php')){
    require_once 'models/'.$class.'.php';
  //Se não for nem model nem controller, então automaticamente é um core
  } else{
    require_once 'core/'.$class.'.php';
  }
});

$core = new Core();
$core->run();

?>
