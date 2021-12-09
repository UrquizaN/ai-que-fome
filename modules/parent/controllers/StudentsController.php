<?php 
  require "./modules/parent/models/Student.php";

  class StudentsController {
    private $student;

    public function __construct() {
      $this->student = new Student();
    }

    public function createStudent() {
      $this->student->setName($_POST['name']);
      $this->student->setStudentId($_POST['studentId']);
      $this->student->setShift($_POST['shift']);
      $this->student->setClass($_POST['class']);
      $this->student->setEmail($_POST['email']);
      $this->student->setPhone($_POST['phone']);
      $this->student->setPassword($_POST['password']);
      $this->student->setParentId($_POST['parentId']);
      
      $this->student->createStudent();

      header("Location: painel-pais", true, 302);
    }

    public function getStudents() {
      $students = $this->student->getStudents();
      
      return $students;
    }

    public function updateStudent() {
      $this->student->updateStudent();
  
      header("Location: painel-pais", true, 302);
    }

    public function findStudent() {
      return $student = $this->student->findStudent($_POST['studentId']);
    }

    public function findStudentsByParent() {
      return $student = $this->student->findStudentsByParent($_SESSION['parentId']);
    }

    public function deleteStudent() {
      $this->student->deleteStudent();
  
      header("Location: painel-pais", true, 302);
    }

    public function deposit() {
      $this->student->deposit($_POST['studentId'], $_POST['amount']);
    }
  }
?>