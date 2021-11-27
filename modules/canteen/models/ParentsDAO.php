<?php 
  require_once "./shared/Connection.php";

  class ParentsDAO {
    public function createParent($parents) {
      try {
        $connection = Connection::getConnection();

        $sql = $connection->prepare("INSERT INTO parents (name, document, phone, email, login, password) VALUES (:name, :document, :phone, :email, :login, :password)");
        
        var_dump($parents->getName());
        var_dump($parents->getDocument());
        var_dump($parents->getPhone());
        var_dump($parents->getEmail());
        var_dump($parents->getLogin());
        var_dump($parents->getPassword());

        $sql->bindValue(":name", $parents->getName());
        $sql->bindValue(":document", $parents->getDocument());
        $sql->bindValue(":phone", $parents->getPhone());
        $sql->bindValue(":email", $parents->getEmail());
        $sql->bindValue(":login", $parents->getLogin());
        $sql->bindValue(":password", $parents->getPassword());

        $sql->execute();

      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>