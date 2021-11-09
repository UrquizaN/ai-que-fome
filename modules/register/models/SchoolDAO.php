<?php 
  require "Connection.php";

  class SchoolDAO {
    public function createSchool($school) {
      try {
        $connection = Connection::getConnection();
        $sql = $connection->prepare("INSERT INTO schools (name, address, cnpj, email, password) VALUES (:name, :address, :cnpj, :email, :password)");
        $sql->bindParam(":name", $school->getName());
        $sql->bindParam(":address", $school->getAddress());
        $sql->bindParam(":cnpj", $school->getCnpj());
        $sql->bindParam(":email", $school->getEmail());
        $sql->bindParam(":password", $school->getPassword());
        $sql->execute();

        return true;
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>