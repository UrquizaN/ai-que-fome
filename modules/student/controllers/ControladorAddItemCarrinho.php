<?php

require_once "./modules/student/models/CarrinhoSession.php";
require_once "./modules/student/models/ItemCarrinho.php";
require_once "./modules/student/controllers/IControlador.php";

class ControladorAddItemCarrinho implements IControlador{
     private $carrinhoSession; 
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
     }

     public function processaRequisicao(){
        if (isset($_POST['productId']) && preg_match("/^[0-9]+/",$_POST['productId'])){
            //cria o objeto itemCarrinho
            $itemCarrinho = new ItemCarrinho($_POST['productId'],1);
            //adiciona o itemCarrinho no carrinho
            $this->carrinhoSession->adicionar($itemCarrinho);
        }
        header('Location: carrinho', true,302);
     }

}

?>