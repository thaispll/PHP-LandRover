<?php
require_once 'controllers/ProdutoController.php';
//Roteamento 

$controller = new ProdutoController();

$controller -> listar();
?>