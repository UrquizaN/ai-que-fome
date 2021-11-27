<?php 
  require "./modules/canteen/models/Product.php";

  class RegisterProductController {
    private $product;

    public function __construct() {
      $this->product = new Product($_POST['category'], $_POST['code'], $_POST['name'], $_POST['price'], $_POST['ingredients'], $_POST['image']);
    }

    public function createProduct() {
      $this->product->setCategory($_POST['category']);
      $this->product->setCode($_POST['code']);
      $this->product->setName($_POST['name']);
      $this->product->setPrice($_POST['price']);
      $this->product->setIngredients($_POST['ingredients']);
      $this->product->setImage($_POST['image']);

      $this->product->createProduct();

      header("Location: dashboard", true, 302);
    }
  }
?>