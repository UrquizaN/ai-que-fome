<?php
require_once "./modules/canteen/models/Product.php";

class ProductController{
  private $product;

  public function __construct() {
    $this->product = new Product();
  }

  public function getProducts() {
    $products = $this->product->getProducts();
    $drinks = array();
    $foods = array();

    $_SESSION['products'] = $products;

    foreach ($products as $product) {
      if ($product->getCategory() == "1") {
        array_push($foods, $product);
      } else {
        array_push($drinks, $product);
      }
    }

    $data = array($foods, $drinks);

    return $data;
  }

  public function findProduct() {
    return $product = $this->product->findProduct($_POST['id']);
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

  public function updateProduct() {

    $this->product->updateProduct();

    header("Location: dashboard", true, 302);
  }

  public function deleteProduct() {
    $this->product->deleteProduct();

    header("Location: dashboard", true, 302);
  }
}
