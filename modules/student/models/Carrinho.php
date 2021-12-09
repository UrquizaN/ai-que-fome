<?php
//esta classe cria um carrinho de compras
//o carrinho produto e quantidade
class Carrinho{
    private $produto;
    private $quantidade;

    public function getProduct(){
        return $this->produto;
    }
    public function getQuantity(){
        return $this->quantidade;
    }
    public function setProduct($produto){
        $this->produto = $produto;
    }
    public function setQuantity($quantidade){
        $this->quantidade = $quantidade;
    }
 }

?>