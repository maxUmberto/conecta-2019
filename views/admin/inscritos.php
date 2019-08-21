<?php
require_once 'assets/menu.php';
?>

<div class="container container-admin">
    <div class="table-responsive">
        <h3 class="text-center">Todos os inscritos no evento</h3>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($viewData as $data){
                echo '<tr>'.
                    '<td>'.$data['nome'].'</td>'.
                    '<td><a href="'.BASE_URL.'/admin/inscritos/'.$data['id_usuario'].'" class="btn btn-info">Ver</a></td>'.
                    '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
