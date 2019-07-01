<?php

class sobreController extends Controller {

  public function index(){
    $dados = array();
    $this->loadTemplate('sobre', $dados);
  }

}
?>
