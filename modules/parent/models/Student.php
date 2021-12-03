<?php 
  require "StudentDAO.php";

  class Student {
    private $studentId;
    private $class;
    private $shift;
    private $balance;
    private $name;
    private $phone;
    private $email;
    private $password;
    private $userType;

    public function __construct($studentId = '', $class = '', $shift = '1', $name = '', $phone = null, $email = null, $password = null) {
      $this->studentId = $studentId;
      $this->class = $class;
      $this->shift = $shift;
      $this->name = $name;
      $this->phone = $phone;
      $this->email = $email;
      $this->balance = 0;
      $this->password = $password;
      $this->userType = "3";
    }

    public function getName() {
      return $this->name;
    }

    public function getStudentId() {
      return $this->studentId;
    }

    public function getShift() {
      return $this->shift;
    }

    public function getClass() {
      return $this->class;
    }

    public function getBalance() {
      return $this->balance;
    }

    public function getPhone() {
      return $this->phone;
    }

    public function getEmail() {
      return $this->email;
    }

    public function getPassword() {
      return $this->password;
    }

    public function getUserType() {
      return $this->userType;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function setStudentId($studentId) {
      $this->studentId = $studentId;
    }

    public function setShift($shift) {
      $this->shift = $shift;
    }

    public function setBalance($balance) {
      $this->balance = $balance;
    }

    public function setClass($class) {
      $this->class = $class;
    }

    public function setPhone($phone) {
      $this->phone = $phone;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function createStudent() {
      $studentDAO = new StudentDAO();
      $studentDAO->createStudent($this);
    }

    public function getStudents() {
      $studentDAO = new StudentDAO();
      $studentDAO->getStudents($this);
    }

    public function findStudent($studentId){
      $studentDAO = new StudentDAO();
      $studentDAO->findStudent($studentId);
    }

    public function updateStudent() {
      $studentDAO = new StudentDAO();
      $studentDAO->updateStudent($this);
    }
  }
?>