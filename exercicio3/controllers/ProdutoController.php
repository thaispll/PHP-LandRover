<?php

require_once 'models/Produto.php';

class ProdutoController {
    private $model;

    public function __construct() {
        $this -> model = new Produto();
    }

    public function index() {
        $produtos = $this->model->listarProdutos();
        include 'views/produto-lista.php';
    }

    public function mostrar($id){
        $produto = $this->model->buscarPorId($id);

        if($produto){
            include 'views/detalhe.php';
        } else {
            echo "Erro: Produto não encontrado.";
        }
    }
}