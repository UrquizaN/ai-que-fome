<?php
require_once "./modules/canteen/models/Product.php";

class GetProductsController{
  private $product;

  public function __construct()
  {
    $this->product = new Product();
  }

  public function getProducts()
  {
    $products = $this->product->getProducts();
    $drinks = array();
    $foods = array();

    foreach ($products as $product) {
      if ($product->getCategory() == "1") {
        array_push($foods, $product);
      } else {
        array_push($drinks, $product);
      }
    }

    require "./modules/canteen/views/index.php";
  }
}
