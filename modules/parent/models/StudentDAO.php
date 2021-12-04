<?php 
  require_once "./shared/Connection.php";

  class StudentDAO {
    public function createStudent($student) {
      try {
        $connection = Connection::getConnection();

        $sql = $connection->prepare("INSERT INTO students (name, studentId, shift, class, phone, email, password, userType) VALUES (:name, :studentId, :shift, :class, :phone, :email, :password, :userType)");
        
        $sql->bindValue(":name", $student->getName());
        $sql->bindValue(":studentId", $student->getStudentId());
        $sql->bindValue(":shift", $student->getShift());
        $sql->bindValue(":class", $student->getClass());
        $sql->bindValue(":phone", $student->getPhone());
        $sql->bindValue(":email", $student->getEmail());
        $sql->bindValue(":password", $student->getPassword());
        $sql->bindValue(":userType", $student->getUserType());

        $sql->execute();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }

    public function getStudents(){
      try{
        $connection = Connection::getConnection();
        $sql = $connection->prepare("SELECT * from students");
              
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $students = array();

        $i = 0;

        while ($key = $sql->fetch(PDO::FETCH_ASSOC)) {
          $student = new Student();

          $student->setName($key['name']);
          $student->setStudentId($key['studentId']);
          $student->setShift($key['shift']);
          $student->setClass($key['class']);
          $student->setPhone($key['phone']);
          $student->setBalance($key['balance']);
          $student->setEmail($key['email']);
          $student->setPassword($key['password']);
          $students[$i] = $student;
          $i++;
        }

        require "./modules/parent/views/index.php";
     }
     catch(PDOException $e){
      return array();
     }
    }

    public function findStudent($studentId){
      try{
        $connection = Connection::getConnection();
        
        $sql = $connection->prepare("SELECT * from students where studentId = :studentId");
        $sql->execute(array(
          ':studentId' => $studentId
        ));

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $key = $sql->fetch(PDO::FETCH_ASSOC);

        $student = new student(
          $key['name'],
          $key['studentId'],
          $key['shift'],
          $key['class'],
          $key['phone'],
          $key['balance'],
          $key['email'],
          $key['password'],
        );

        $student->setName($key['name']);
        $student->setStudentId($key['studentId']);
        $student->setShift($key['shift']);
        $student->setClass($key['class']);
        $student->setPhone($key['phone']);
        $student->setBalance($key['balance']);
        $student->setEmail($key['email']);
        $student->setPassword($key['password']);

        require("./modules/parent/views/EditStudent.php");
      }
      catch(PDOException $e){
        return null;
      }
    }

    public function updateStudent(){
      try{
        $connection = Connection::getConnection();
        $sql = $connection->prepare("UPDATE students SET name = :name, email = :email, shift = :shift, class = :class, phone = :phone WHERE studentId = :studentId");
        
        $sql->bindValue(":name", $_POST['name']);
        $sql->bindValue(":email", $_POST['email']);
        $sql->bindValue(":shift", $_POST['shift']);
        $sql->bindValue(":class", $_POST['class']);
        $sql->bindValue(":phone", $_POST['phone']);
        $sql->bindValue(":studentId", $_POST['studentId']);
        
        $sql->execute();

      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }

    public function deleteStudent(){
      try{
        $connection = Connection::getConnection();
        $sql = $connection->prepare("DELETE FROM students WHERE studentId = :studentId");
        $sql->bindValue(":studentId", $_POST['studentToDelete']);

        var_dump($_POST['studentToDelete']);
        
        $sql->execute();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>