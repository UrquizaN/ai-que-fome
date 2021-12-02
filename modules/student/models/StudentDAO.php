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
        $sql->fetch(PDO::FETCH_ASSOC);

        $students = array();

        $i = 0;

        while ($key = $sql->fetch(PDO::FETCH_ASSOC)) {
          $student = new Student(
            $key['name'],
            $key['studentId'],
            $key['shift'],
            $key['class'],
            $key['phone'],
            $key['email'],
            $key['password']
          );

          $student->setName($key['name']);
          $student->setStudentId($key['studentId']);
          $student->setShift($key['shift']);
          $student->setClass($key['class']);
          $student->setPhone($key['phone']);
          $student->setEmail($key['email']);
          $student->setPassword($key['password']);
          $students[$i] = $student;
          $i++;
        }

        return $students;
     }
     catch(PDOException $e){
      return array();
     }
    }
  }
?>