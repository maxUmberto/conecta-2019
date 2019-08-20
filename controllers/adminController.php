<?php
class adminController extends Controller{
    public function index(){
        if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
            $dados = array();
            $this->loadTemplateAdmin('home', $dados);
        }else{
            header('Location:'.BASE_URL.'/login');
            die();
        }
    }
}
?>