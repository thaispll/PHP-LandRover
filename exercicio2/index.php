<?php
require_once 'controllers/TarefaController.php';

$controller = new TarefaController();

// Verifica se existe uma ação na URL, caso contrário, a ação padrão é 'listar'
$acao = $_GET['acao'] ?? 'listar';

if ($acao === 'salvar' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->salvarTarefa();
} else {
    $controller->exibirTarefas();
}