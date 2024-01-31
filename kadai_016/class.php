<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    // クラスを定義する
    class Food {
      // プロパティを定義する                        
      private $name;
      private $price;

      // メソッドを定義する
      public function set_price(int $price) {
        $this->price = $price;
      }
      public function show_price() {
        echo  '<br>' . $this->price;
    }

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      } 
    }

    // インスタンス化する
    $food = new Food('豆腐', 100);
   // インスタンス$userの各プロパティの値を出力する
   print_r($food);
   echo '<br>';
  ?>

  <?php
    // クラスを定義する
    class Animal {
      // プロパティを定義する                        
      private $name;
      private $height;
      private $weight;

      // メソッドを定義する
      public function set_height(int $height) {
          $this->height = $height;
      }
      public function show_height() {
        echo '<br>' . $this->height;
    }

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      } 
    }

    // インスタンス化する
    $animal = new Animal('cat', 20,40);
    // インスタンス$userの各プロパティの値を出力する
    print_r($animal);
    ?>
    
  <?php
    $food->show_price();
    $animal->show_height();
  ?>
  </p>

</body>
</html>