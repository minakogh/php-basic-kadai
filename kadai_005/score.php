<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>テストの平均点を計算しよう</title>
</head>

<body>
  <p>
<?php
// Step 1 & 2: 変数の作成と点数の代入
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

// Step 3: 合計点の算出
$total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

// 平均点の算出（合計 ÷ 人数）
$average = $total / 10;

// ブラウザに平均点を出力
echo "10人の平均点は " . $average . " 点です。";
?>
  </p>
</body>
</html>