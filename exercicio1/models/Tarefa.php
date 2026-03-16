<?php
/*Crie um sistema MVC simples para listar tarefas fixas.
 No Model, defina um array  om 3 tarefas (nome e status). 
 No Controller, carregue o Model e passe os dados  */

class Tarefa {
    public static function exibirTarefas(){
        return [
            ['nome' => 'Estudar POO em PHP', 'concluida' => true],
            ['nome' => 'Criar index.php', 'concluida' => true],
            ['nome' => 'Configurar servidor', 'concluida' => false]
        ];
    }
}
?>