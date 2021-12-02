<?php 
  require "./shared/Connection.php";

  class SchoolDAO {
    public function createSchool($school) {
      try {
        $connection = Connection::getConnection();
        $sql = $connection->prepare("INSERT INTO schools (name, address, cnpj, email, password, userType) VALUES (:name, :address, :cnpj, :email, :password, :userType)");
        $sql->bindParam(":name", $school->getName());
        $sql->bindParam(":address", $school->getAddress());
        $sql->bindParam(":cnpj", $school->getCnpj());
        $sql->bindParam(":email", $school->getEmail());
        $sql->bindParam(":password", $school->getPassword());
        $sql->bindParam(":userType", $school->getUserType());
        $sql->execute();

        return true;
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>