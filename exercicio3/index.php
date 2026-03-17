<?php 
require_once 'controllers/ProdutoController.php';
$controller = new ProdutoController();

if(isset($_GET['id'])){
    $controller->mostrar($_GET['id']);
} else {
    $controller->index();
}
?>