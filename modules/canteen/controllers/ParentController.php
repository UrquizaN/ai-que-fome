<?php 
  require "./modules/canteen/models/Parents.php";

  class ParentController {
    private $parents;

    public function __construct() {
      $this->parents = new Parents();
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

    public function findParent() {
      if(isset($_POST['parent-email'])) {
        return $parents = $this->parents->findParent($_POST['parent-email']);
      }
    }

    public function updateParent() {

      $this->parents->updateParent();
  
      header("Location: dashboard", true, 302);
    }

    public function deleteParent() {
      $this->parents->deleteParent();
  
      header("Location: dashboard", true, 302);
    }
  }
?>