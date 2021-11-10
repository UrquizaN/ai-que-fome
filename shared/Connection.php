<?php 
  class Connection {
    public static function getConnection() {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "canteens";

      try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }
  }
?>