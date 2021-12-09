<?php
//classe que representa os itens do carrinho
//cada item é formado pelo produto e a quantidade comprada
require_once "./modules/canteen/models/Product.php";
class ItemCarrinho{
   private $produto;
   private $quantidade;
   
   public function __construct($id, $quantidade){
       $this->produto = new Product();
       $this->produto->setCode($id);
       $product = $this->produto->findProduct($id);

       $this->produto = $product;
       $this->quantidade = $quantidade;
   }
   
   public function getProduct(){
       return $this->produto;
   }
   public function getQuantity(){
       return $this->quantidade;
   }
   public function getSubTotal(){
       return $this->produto->getPrice() * $this->quantidade;
   }
   public function setProduct($produto){
       $this->$produto = $produto;
   }
   public function setQuantity($quantidade){
       $this->quantidade = $quantidade;
   }
  
}
?>