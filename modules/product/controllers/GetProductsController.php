<?php
require_once "./modules/product/models/Product.php";

class GetProductsController {
    private $product;

    public function __construct(){
        $this->product = new Product();
    }

    public function getProducts(){
        $products = $this->product->getProducts();
        require "./modules/canteen/views/index.php";
    }
}
?>