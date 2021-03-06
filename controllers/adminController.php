<?php
class adminController extends Controller{

    private $sexo = [
        'homem'     => 0,
        'mulher'    => 0,
        'outro'     => 0,
        'pct_homem' => 0,
        'pct_mulher' => 0,
        'pct_outro' => 0
    ];

    private $instituicao = [
        'ufrrj-seropedica'      => 0,
        'ufrrj-im'              => 0,
        'outro'                 => 0,
        'pct_ufrrj-seropedica'  => 0,
        'pct_ufrrj-im'          => 0,
        'pct_outro'             => 0
    ];

    private $anos = [
        'outro' => [
            'ano'   => 'Sem matrícula',
            'total' => 0,
            'pct'   => 0
        ]
    ];

    public function index(){
        $this->isLogged();

        $admin = new Admin();
        $dados = $admin->selecionaTodosIndex();

        $total = count($dados);

        foreach ($dados as $dado){
            $this->qtdSexo($dado['sexo']);
            $this->qtdInstituicao($dado['instituicao']);
            $this->anos($dado['matricula']);
        }

        $this->pctSexo($total);
        $this->pctInstituicao($total);
        $this->pctAno($total);

        $dados['total'] = $total;
        $dados['sexo'] = $this->sexo;
        $dados['instituicao'] = $this->instituicao;
        $dados['anos'] = $this->anos;
        $this->loadTemplateAdmin('home', $dados);
    }

    public function inscritos($id = null){
        $this->isLogged();
        if(!$id){
            $admin = new Admin();
            $dados = $admin->selecionaTodosInscritos();

            $this->loadTemplateAdmin('inscritos', $dados);
        }else{
            echo 'temos id';
        }
    }

    private function isLogged(){
        if(!isset($_SESSION['logged']) || $_SESSION['logged'] != true){
            header('Location:'.BASE_URL.'/login');
            die();
        }
    }

    private function qtdSexo($dado){
        if($dado == 1){
            $this->sexo['homem']++;
        }else if($dado == 2){
            $this->sexo['mulher']++;
        }else{
            $this->sexo['outro']++;
        }
    }

    private function pctSexo($total){
        $this->sexo['pct_homem'] = (($this->sexo['homem'] * 100) / $total);
        $this->sexo['pct_mulher'] = (($this->sexo['mulher'] * 100) / $total);
        $this->sexo['pct_outro'] = (($this->sexo['outro'] * 100) / $total);
    }

    private function qtdInstituicao($dado){
        if($dado == 1){
            $this->instituicao['ufrrj-seropedica']++;
        }else if($dado == 2){
            $this->instituicao['ufrrj-im']++;
        }else{
            $this->instituicao['outro']++;
        }
    }

    private function pctInstituicao($total){
        $this->instituicao['pct_ufrrj-seropedica'] = (($this->instituicao['ufrrj-seropedica'] * 100) / $total);
        $this->instituicao['pct_ufrrj-im'] = (($this->instituicao['ufrrj-im'] * 100) / $total);
        $this->instituicao['pct_outro'] = (($this->instituicao['outro'] * 100) / $total);
    }

    private function anos($matricula){
        if($matricula == null){
            $this->anos['outro']['total']++;
        }else{
            $ano = substr($matricula, 0,4);
            if(array_key_exists($ano,$this->anos)){
                $this->anos[$ano]['total']++;
            }else{
                $this->anos[$ano]['total'] = 0;
                $this->anos[$ano]['ano'] = $ano;
                $this->anos[$ano]['pct'] = 0;
                $this->anos[$ano]['total']++;
            }
        }
    }

    private function porcentagem($variavel, $total){
        return ($variavel * 100) / $total;
    }

    private function pctAno($total){
        foreach($this->anos as $ano => $valor){
            $this->anos[$ano]['pct'] = $this->porcentagem($valor['total'], $total);
        }
    }
}
?>