<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        /**
         * 配列を昇順または降順でソートして表示する関数
         *
         * @param array $array ソート対象の配列
         * @param bool  $order ソート方向（TRUE: 昇順 / FALSE: 降順）
         */
        function sort_2way($array, $order)
        {
            // ソート方向を判定
            if ($order === TRUE) {
                echo "昇順ソート<br>";
                sort($array);   // 昇順
            } else {
                echo "降順ソート<br>";
                rsort($array);  // 降順
            }

            // ソート結果を1行ずつ表示
            foreach ($array as $value) {
                echo $value . "<br>";
            }

            echo "<br>";
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        sort_2way($nums, TRUE);

        // 降順ソート
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
