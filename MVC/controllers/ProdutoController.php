<?php 
//cérebro. Pede os dados ao Model

require_once 'models/Produto.php';

class ProdutoController {
    public function listar(){
        // 1. Pedir dados ao Model
        $produtos = Produto::todos();

        //2. Carregar a view e passar os dados para ela
        include 'views/produto-lista.php';
    }
}
?>