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
        var_dump($user['userType']);
        echo "<br>";
        var_dump($user);

        switch($user['userType']) {
          case '1':
            $_SESSION['user'] = $user['name'];
            $_SESSION['address'] = $user['address'];
            $_SESSION['cnpj'] = $user['cnpj'];
            header("Location: Dashboard");
            break;
          case '2':
            $_SESSION['user'] = $user['name'];
            header("Location: Painel-Pais");
            break;
          case '3':
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
  }
?>