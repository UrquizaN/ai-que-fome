<?php

require_once "./modules/student/models/CarrinhoSession.php";
require_once "./modules/student/models/ItemCarrinho.php";
require_once "./modules/student/controllers/IControlador.php";

class ControladorApagaItemCarrinho implements IControlador{
     private $carrinhoSession;     
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
     }

     public function processaRequisicao(){
        if (isset($_POST['productId']) && preg_match("/^[0-9]+/",$_POST['productId'])){
            //apaga do carrinho
            $this->carrinhoSession->apagar($_POST['productId']);
        }
        header('Location:Carrinho', true,302);

     }

}

?>