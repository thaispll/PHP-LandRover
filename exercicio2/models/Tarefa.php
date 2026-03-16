<?php
/*Expanda o exercício anterior: adicione um formulário na View para inserir nova 
tarefa. No Controller, receba os dados do POST, adicione ao array do Model e 
redirecione para a lista atualizada.  */
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
class Tarefa {
    public static function exibirTarefas(){

        if(!isset($_SESSION['tarefas'])){
            $_SESSION['tarefas'] = [
                ['nome' => 'Estudar POO em PHP', 'concluida' => true],
                ['nome' => 'Criar index.php', 'concluida' => true],
                ['nome' => 'Configurar servidor', 'concluida' => false]
            ];  
        }
        return $_SESSION['tarefas'];
    }
    public static function salvarTarefa($nome){
        $_SESSION['tarefas'][] = ['nome' => $nome, 'concluida' =>false];
        return true;
    }
}
?>