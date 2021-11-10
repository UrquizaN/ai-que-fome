<?php 
  require "../models/Login.php";

  class LoginController {
    private $login;

    public function __construct() {
      $this->login = new Login($_POST['email'], $_POST['password']);
    }

    public function login() {
      $this->login->setEmail($_POST['email']);
      $this->login->setPassword($_POST['password']);

      $user = $this->login->login();

      require "../../canteen/views/index.php";
      // header("Location: ../../canteen/views/index.php", true, 302);
    }
  }
?>