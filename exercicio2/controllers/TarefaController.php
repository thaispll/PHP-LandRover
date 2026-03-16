<?php
require_once 'models/Tarefa.php';

class TarefaController {
    public function exibirTarefas() {
        //Buscar os dados no model
        $listaTarefas = Tarefa::exibirTarefas();

        //Carregar view
        include 'views/tarefa-lista.php';
    }

    public function salvarTarefa(){
        if (isset($_POST['nome_tarefa'])){
            $nome = $_POST['nome_tarefa'];

            //avisar ao model para salvar
            Tarefa::salvarTarefa($nome);

            //redirecionamento: limpar url e evitar reenvio dos dados ao dar F5
            header("Location: index.php");
            exit();
        }
    }
}
?>