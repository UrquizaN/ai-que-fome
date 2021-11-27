<?php 
  require "ProductDAO.php";

  class Product {
    private $category;
    private $code;
    private $name;
    private $ingredients;
    private $image;
    private $price;

    public function getCategory() {
      return $this->category;
    }

    public function getCode() {
      return $this->code;
    }

    public function getName() {
      return $this->name;
    } 

    public function getIngredients() {
      return $this->ingredients;
    }

    public function getImage() {
      return $this->image;
    }

    public function getPrice() {
      return $this->price;
    }

    public function setCategory($category) {
      $this->category = $category;
    }

    public function setCode($code) {
      $this->code = $code;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function setIngredients($ingredients) {
      $this->ingredients = $ingredients;
    }

    public function setImage($image) {
      $this->image = $image;
    }

    public function setPrice($price) {
      $this->price = $price;
    }

    public function createProduct() {
      $productDAO = new ProductDAO();
      $productDAO->createProduct($this);
    }

    public function getProducts(){
      $productDAO = new ProductDAO();
      return $productDAO->getProducts();
    }
  }
?>