<?php 
    require_once 'controllers/TarefaController.php';

    $app = new TarefaController();
    $app -> exibirTarefas();
?>