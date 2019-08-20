<?php

class Controller{

  public function loadView($viewName, $viewData = array()){
    //extract transforma os dados do array em variáveis
    //equivalentes
    extract($viewData);

    include 'views/'.$viewName.'.php';
  }

  public function loadTemplate($viewName, $viewData = array()){
    include 'views/template/template.php';
  }

  public function loadTemplateAdmin($viewName, $viewData = array()){
    include 'views/template/templateAdmin.php';
  }

  public function loadViewInTemplate($viewName, $viewData = array()){
    extract($viewData);
    include 'views/'.$viewName.'.php';
  }

  public function loadViewInTemplateAdmin($viewName, $viewData = array()){
    extract($viewData);
    include 'views/admin/'.$viewName.'.php';
  }

}

?>
