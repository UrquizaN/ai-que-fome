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

    public function getProducts() {
      try {
        $connection = Connection::getConnection();

        $sql = $connection->prepare("SELECT * FROM products");
        $sql = $sql->execute();
        
        $products = $sql->fetchAll(PDO::FETCH_ASSOC);

        var_dump($products);
        return $products;
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>