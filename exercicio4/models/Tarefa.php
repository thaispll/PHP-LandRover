<?php
/*No sistema de tarefas, adicione um botão "Concluir" em cada item. No Controller, 
receba o ID da tarefa via GET, atualize o status no Model (de "pendente" para 
"concluída") e recarregue a lista.  */
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
        $_SESSION['tarefas'][] = [
            'nome' => $nome, 
            'concluida' =>false
        ];
        return true;
    }

    public function marcarComoConcluida($id){
        foreach($this->tarefas as &$tarefa) { //& permite alterar o vetor original
            if($tarefa['id'] == $id){
                $tarefa['status'] = 'concluida';
            }
        }
        return $this->tarefas; //retornar a lista atualizada
    }
}
?>