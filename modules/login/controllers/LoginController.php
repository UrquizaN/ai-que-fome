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
        switch($user['userType']) {
          case '1':
            $_SESSION['user'] = $user['name'];
            $_SESSION['address'] = $user['address'];
            $_SESSION['cnpj'] = $user['cnpj'];
            header("Location: Dashboard");
            break;
          case '2':
            $_SESSION['user'] = $user['name'];
            header("Location: painel-pais");
            break;
          case '3':
            require "./modules/canteen/controllers/ProductController.php";
            $controller = new ProductController();
            $controller->getProducts();
            $_SESSION['user'] = $user['name'];
            $_SESSION['class'] = $user['class'];
            $_SESSION['balance'] = $user['balance'];
            header("Location: Cardapio");
            break;
        }
      } else {
        return false;
        echo "Usuário ou senha inválidos";
      }
    }

    public function logout() {
      session_destroy();
      header("Location: Login");
    }
  }
?>