<?php 
  require "./shared/Connection.php";

  class ProductDAO {
    public function createProduct($product) {
      try {
        $connection = Connection::getConnection();

        $sql = $connection->prepare("INSERT INTO products (category, code, name, ingredients, image, price) VALUES (:category, :code, :name, :ingredients, :image, :price)");
        $sql = $sql->execute(array(
          ':category' => $product->getCategory(),
          ':code' => $product->getCode(),
          ':name' => $product->getName(),
          ':ingredients' => $product->getIngredients(),
          ':image' => $product->getImage(),
          ':price' => $product->getPrice()
        ));
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }

    public function getProducts(){
      try{
        $connection = Connection::getConnection();
        $sql = $connection->prepare("SELECT * from products");
              
         $sql->execute();
         $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
         
         $products = array();

         $i = 0;

         while ($key = $sql->fetch(PDO::FETCH_ASSOC)) {
          $product = new Product();
          $product->setCategory($key['category']);
          $product->setCode($key['code']);
          $product->setName($key['name']);
          $product->setIngredients($key['ingredients']);
          $product->setImage($key['image']);
          $product->setPrice($key['price']);
          $products[$i] = $product;
          $i++;
        }
      return $products;
     }
     catch(PDOException $e){
      return array();
     }
    }
  }
?>