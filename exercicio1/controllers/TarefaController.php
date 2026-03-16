<?php
require_once 'models/Tarefa.php';

class TarefaController {
    public function exibirTarefas() {
        //Buscar os dados no model
        $listaTarefas = Tarefa::exibirTarefas();

        //Carregar view
        include 'views/tarefa-lista.php';
    }
}
?>