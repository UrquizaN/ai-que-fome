<?php 
  require "./modules/canteen/models/Parents.php";

  class RegisterParentController {
    private $parents;

    public function __construct() {
      $this->parents = new Parents($_POST['name'], $_POST['document'], $_POST['email'], $_POST['phone'], $_POST['login'], $_POST['password']);
    }

    public function createParent() {
      $this->parents->setName($_POST['name']);
      $this->parents->setDocument($_POST['document']);
      $this->parents->setEmail($_POST['email']);
      $this->parents->setPhone($_POST['phone']);
      $this->parents->setLogin($_POST['login']);
      $this->parents->setPassword($_POST['password']);
      
      $this->parents->createParent();

      header("Location: dashboard", true, 302);
    }
  }
?>