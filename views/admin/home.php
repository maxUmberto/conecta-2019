<?php
require_once 'assets/menu.php';
?>
<div class="container container-admin">
    <div class="jumbotron">
        <h2>Total de Inscritos: <?php echo $total?> inscritos</h2>
    </div>
    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Inscritos por Sexo</h5>
                <p class="card-text">Homens: <?php echo $sexo['homem'].' - '.$sexo['pct_homem'].'%'; ?></p>
                <p class="card-text">Mulheres: <?php echo $sexo['mulher'].' - '.$sexo['pct_mulher'].'%'; ?></p>
                <p class="card-text">Outros: <?php echo $sexo['outro'].' - '.$sexo['pct_outro'].'%'; ?></p>
            </div>
        </div><div class="card">
            <div class="card-body">
                <h5 class="card-title">Inscritos por Instituição</h5>
                <p class="card-text">UFRRJ - Seropédica: <?php echo $instituicao['ufrrj-seropedica'].' - '.$instituicao['pct_ufrrj-seropedica'].'%'; ?></p>
                <p class="card-text">UFRRJ - IM: <?php echo $instituicao['ufrrj-im'].' - '.$instituicao['pct_ufrrj-im'].'%'; ?></p>
                <p class="card-text">Outros: <?php echo $instituicao['outro'].' - '.$instituicao['pct_outro'].'%'; ?></p>
            </div>
        </div><div class="card">
            <div class="card-body">
                <h5 class="card-title">Inscritos por ano</h5>
                <?php
                foreach ($anos as $ano){
                    echo '<p class="card-text">'.$ano['ano'].': '.$ano['total'].' - '.$ano['pct'].'%</p>';
                }
                ?>
            </div>
    </div>
</div>
