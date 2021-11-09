<?php 
  require "../models/School.php";

  class RegisterController {
    private $school;

    public function __construct() {
      $this->school = new School($_POST['name'], $_POST['address'], $_POST['cnpj'], $_POST['email'], $_POST['password']);
    }

    public function createSchool() {
      $this->school->setName($_POST['name']);
      $this->school->setAddress($_POST['address']);
      $this->school->setCnpj($_POST['cnpj']);
      $this->school->setEmail($_POST['email']);
      $this->school->setPassword($_POST['password']);

      $this->school->createSchool();

      header("Location: ../../login/views/index.php", true, 302);
    }
  }
?>