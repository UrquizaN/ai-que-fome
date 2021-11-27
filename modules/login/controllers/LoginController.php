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
        var_dump($user);
        $_SESSION['user'] = $user['name'];
        $_SESSION['address'] = $user['address'];
        $_SESSION['cnpj'] = $user['cnpj'];
        header("Location: Dashboard");
      } else {
        echo "Usuário ou senha inválidos";
      }
    }
  }
?>