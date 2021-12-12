<?php 
  require_once "./shared/Connection.php";

  class ParentsDAO {
    public function createParent($parents) {
      try {
        $connection = Connection::getConnection();

        $sql = $connection->prepare("INSERT INTO parents (name, document, phone, email, login, password) VALUES (:name, :document, :phone, :email, :login, :password)");
        
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

    public function findParent($parentEmail) {
      try {
        $connection = Connection::getConnection();

        $sql = $connection->prepare("SELECT * FROM parents WHERE email = :email");
        
        $sql->bindValue(":email", $parentEmail);

        $sql->execute();

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $key = $sql->fetch(PDO::FETCH_ASSOC);

        if ($key == false) {
          return false;
        }

        $parents = new Parents(
          $key['id'],
          $key['name'],
          $key['document'],
          $key['phone'],
          $key['email'],
          $key['login'],
          $key['password'],
          $key['userType'],
        );

        $parents->setId($key['id']);
        $parents->setName($key['name']);
        $parents->setDocument($key['document']);
        $parents->setPhone($key['phone']);
        $parents->setEmail($key['email']);
        $parents->setLogin($key['login']);
        $parents->setPassword($key['password']);
        $parents->setUserType($key['userType']);
        
        return $parents;
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }

    public function updateParent(){
      try{
        $connection = Connection::getConnection();
        $sql = $connection->prepare("UPDATE parents SET name = :name, document = :document, phone = :phone, email = :email, login = :login, password = :password WHERE id = :id");

        $sql->bindValue(":id", $_POST['id']);
        $sql->bindValue(":name", $_POST['name']);
        $sql->bindValue(":document", $_POST['document']);
        $sql->bindValue(":phone", $_POST['phone']);
        $sql->bindValue(":email", $_POST['email']);
        $sql->bindValue(":login", $_POST['login']);
        $sql->bindValue(":password", $_POST['password']);

        $sql->execute();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }

    public function deleteParent(){
      try{
        $connection = Connection::getConnection();
        $sql = $connection->prepare("DELETE FROM parents WHERE id = :id");
        $sql->bindValue(":id", $_POST['id']);

        $sql->execute();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>