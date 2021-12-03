<?php 
  require_once "./shared/Connection.php";

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
         $sql->setFetchMode(PDO::FETCH_ASSOC);
         
         $products = array();

         $i = 0;

         while ($key = $sql->fetch(PDO::FETCH_ASSOC)) {
          $product = new Product(
            $key['category'],
            $key['code'],
            $key['name'],
            $key['ingredients'],
            $key['image'],
            $key['price']
          );
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

    public function findProduct($code){
      try{
        $connection = Connection::getConnection();
        
        $sql = $connection->prepare("SELECT * from products where code = :code");
        $sql->execute(array(
          ':code' => $code
        ));

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $key = $sql->fetch(PDO::FETCH_ASSOC);

        $product = new Product(
          $key['category'],
          $key['code'],
          $key['name'],
          $key['ingredients'],
          $key['image'],
          $key['price']
        );

        $product->setCategory($key['category']);
        $product->setCode($key['code']);
        $product->setName($key['name']);
        $product->setIngredients($key['ingredients']);
        $product->setImage($key['image']);
        $product->setPrice($key['price']);

        return $product;
      }
      catch(PDOException $e){
        return null;
      }
    }

    public function updateProduct($product){
      try{
        $connection = Connection::getConnection();
        $sql = $connection->prepare("UPDATE products SET category = :category, code = :code, name = :name, ingredients = :ingredients, image = :image, price = :price");

        $sql->bindValue(":category", $_POST['category']);
        $sql->bindValue(":code", $_POST['code']);
        $sql->bindValue(":name", $_POST['name']);
        $sql->bindValue(":ingredients", $_POST['ingredients']);
        $sql->bindValue(":image", $_POST['image']);
        $sql->bindValue(":price", $_POST['price']);

        $sql->execute();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>