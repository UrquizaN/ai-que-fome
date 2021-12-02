<?php 
  require "./modules/student/models/Student.php";

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
      
      $this->student->createStudent();

      header("Location: Painel-Pais", true, 302);
    }

    public function getStudents() {
      $students = $this->student->getStudents();
  
      require "./modules/parent/views/index.php";
    }
  }
?>