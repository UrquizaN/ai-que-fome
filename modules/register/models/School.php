<?php 
  require "SchoolDAO.php";

  class School {
    private $name;
    private $address;
    private $cnpj;
    private $email;
    private $password;
    private $userType;

    public function __construct($name, $address, $cnpj, $email, $password) {
      $this->name = $name;
      $this->address = $address;
      $this->cnpj = $cnpj;
      $this->email = $email;
      $this->password = $password;
      $this->userType = "1";
    }

    public function getName() {
      return $this->name;
    }

    public function getAddress() {
      return $this->address;
    }

    public function getCnpj() {
      return $this->cnpj;
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

    public function setAddress($address) {
      $this->address = $address;
    }

    public function setCnpj($cnpj) {
      $this->cnpj = $cnpj;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function setUserType($userType) {
      $this->userType = $userType;
    }

    public function createSchool() {
      $schoolDAO = new SchoolDAO();
      $schoolDAO->createSchool($this);
    }
  }
?>