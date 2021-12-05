<?php 
  require "ProductDAO.php";

  class Product {
    private $id;
    private $category;
    private $code;
    private $name;
    private $ingredients;
    private $image;
    private $price;

    public function __construct($category = '', $code = '', $name = '', $ingredients = null, $image = null, $price = 0) {
      $this->category = $category;
      $this->code = $code;
      $this->name = $name;
      $this->ingredients = $ingredients;
      $this->image = $image;
      $this->price = $price;
    }

    public function getId() {
      return $this->id;
    }

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

    public function setId($id) {
      $this->id = $id;
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

    public function findProduct($id){
      $productDAO = new ProductDAO();
      return $productDAO->findProduct($id);
    }

    public function updateProduct() {
      $productDAO = new ProductDAO();
      $productDAO->updateProduct($this);
    }

    public function deleteProduct() {
      $productDAO = new ProductDAO();
      $productDAO->deleteProduct($this);
    }
  }
?>