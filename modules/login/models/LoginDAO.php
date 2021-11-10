<?php 
  require "../../../shared/Connection.php";

  class LoginDAO {
    public function validateLogin($login) {
      try {
        $connection = Connection::getConnection();

        $userEmail = $login->getEmail();
        $userPassword = $login->getPassword();

        $sql = $connection->prepare("SELECT * FROM schools WHERE email = :email AND password = :password");
        $sql->bindParam("email", $userEmail);
        $sql->bindParam("password", $userPassword);
        $user = $sql->execute();

        $id = $connection->lastInsertId();
        $user = $sql->setFetchMode(PDO::FETCH_ASSOC);
        $users = array();

        $user = $sql->fetch(PDO::FETCH_ASSOC);

        return $user;
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>