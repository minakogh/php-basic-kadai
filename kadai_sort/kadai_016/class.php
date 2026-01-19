<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP クラス課題</title>
</head>

<body>
    <p>
        <?php
        /**
         * Foodクラス
         */
        class Food
        {
            public $name;
            public $price;

            // コンストラクタ
            public function __construct($name, $price)
            {
                $this->name  = $name;
                $this->price = $price;
            }

            // priceを出力するメソッド
            public function show_price()
            {
                echo $this->price . "<br>";
            }
        }

        /**
         * Animalクラス
         */
        class Animal
        {
            public $name;
            public $height;
            public $weight;

            // コンストラクタ
            public function __construct($name, $height, $weight)
            {
                $this->name   = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightを出力するメソッド
            public function show_height()
            {
                echo $this->height . "<br>";
            }
        }

        // Step3：インスタンスを作成
        $food = new Food("りんご", 150);
        $animal = new Animal("キリン", 500, 800);

        // インスタンスの中身を出力
        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br><br>";

        // Step4：メソッドへアクセス
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>

</html>
