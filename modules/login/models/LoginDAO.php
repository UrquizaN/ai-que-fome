<?php 
  require_once "./shared/Connection.php";

  class LoginDAO {
    public function validateLogin($login) {
      try {
        $connection = Connection::getConnection();

        $userEmail = $login->getEmail();
        $userPassword = $login->getPassword();

        // $sql = $connection->prepare("SELECT * FROM schools, parents, students WHERE (parents.email = :email OR students.email = :email OR schools.email = :email) AND (parents.password = :password OR students.password = :password OR schools.password = :password)");
        $sql = $connection->prepare("SELECT * FROM schools WHERE email = :email AND password = :password");
        $sql->bindParam("email", $userEmail);
        $sql->bindParam("password", $userPassword);
        
        $user = $sql->execute();

        $user = $sql->setFetchMode(PDO::FETCH_ASSOC);
        $user = $sql->fetch(PDO::FETCH_ASSOC);

        if ($user) {
          return $user;
        } 

        $sql2 = $connection->prepare("SELECT * FROM parents WHERE email = :email AND password = :password");
        $sql2->bindParam("email", $userEmail);
        $sql2->bindParam("password", $userPassword);
        
        $user2 = $sql2->execute();

        $user2 = $sql2->setFetchMode(PDO::FETCH_ASSOC);
        $user2 = $sql2->fetch(PDO::FETCH_ASSOC);

        if ($user2) {
          return $user2;
        } 

        $sql3 = $connection->prepare("SELECT * FROM students WHERE email = :email AND password = :password");
        $sql3->bindParam("email", $userEmail);
        $sql3->bindParam("password", $userPassword);
        
        $user3 = $sql3->execute();

        $user3 = $sql3->setFetchMode(PDO::FETCH_ASSOC);
        $user3 = $sql3->fetch(PDO::FETCH_ASSOC);
        
        if ($user3) {
          return $user3;
        } 
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>