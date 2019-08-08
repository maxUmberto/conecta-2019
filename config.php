<?php

require 'environment.php';

//Crio uma variável global com as informações do banco
//para que eu possa acessá-la de qualquer lugar do código
global $config;

//Define a url padrão do meu código
//Toda a lógica do código vai estar a partir dessa
define('BASE_URL', 'http://localhost/conecta-2019');

$config = array();

if(ENVIRONMENT == 'development'){
  $config['dbname'] = 'conecta';
  $config['dbhost'] = 'localhost';
  $config['dbuser'] = 'root';
  $config['dbpass'] = '';
}else{
  $config['dbname'] = '';
  $config['dbhost'] = '';
  $config['dbuser'] = '';
  $config['dbpass'] = '';
}

?>
