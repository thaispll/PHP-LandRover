<?php 
    require_once 'controllers/TarefaController.php';

    $controller = new TarefaController();

    //roteamento: se a URL tiver ?acao=salvar, ele cria. Senão, apenas lista.
    $acao = $_GET['acao'] ?? 'listar';

    if($acao == 'salvar' && $_SERVER['REQUEST_METHOD'] == 'POST'){
        $controller ->salvarTarefa(); 
    } else {
        $controller->exibirTarefas();
    }
?>