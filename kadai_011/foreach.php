<?php
// 連想配列を作成し、変数に代入
$onion_data = [
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
];

// foreach文を使ってキーと値を出力
foreach ($onion_data as $key => $value) {
    echo $key . ":" . $value . "<br>";
}
?>