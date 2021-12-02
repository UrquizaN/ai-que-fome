<?php 
  require_once "./shared/Connection.php";

  class ParentsDAO {
    public function createParent($parents) {
      try {
        $connection = Connection::getConnection();

        $sql = $connection->prepare("INSERT INTO parents (name, document, phone, email, login, password, userType) VALUES (:name, :document, :phone, :email, :login, :password, :userType)");
        
        $sql->bindValue(":name", $parents->getName());
        $sql->bindValue(":document", $parents->getDocument());
        $sql->bindValue(":phone", $parents->getPhone());
        $sql->bindValue(":email", $parents->getEmail());
        $sql->bindValue(":login", $parents->getLogin());
        $sql->bindValue(":password", $parents->getPassword());
        $sql->bindValue(":userType", $parents->getUserType());

        $sql->execute();

      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>