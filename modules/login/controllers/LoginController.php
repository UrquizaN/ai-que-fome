<?php 
  require "./modules/login/models/Login.php";

  class LoginController {
    private $login;

    public function __construct() {
      $this->login = new Login($_POST['email'], $_POST['password']);
    }

    public function login() {
      $this->login->setEmail($_POST['email']);
      $this->login->setPassword($_POST['password']);

      $user = $this->login->login();

      if($user) {
        // $_SESSION['user'] = $user;
        require("./modules/canteen/views/index.php");
      } else {
        echo "Usuário ou senha inválidos";
      }
    }
  }
?>