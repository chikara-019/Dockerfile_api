<?php
/*
$array = array(500, 320, 820, 123, 82);
$array1 = array(500, 320, 820, 123, 82);
$array2 = array('北海道', '福島', '大阪府', 'わかやま県', 'アキタ県');
$array3 = array("筆箱"=>500, "ノート"=>320, "絵の具"=>820, "鉛筆"=>123, "消ゴム"=>82);
$array4 = array("筆箱"=>500, "ノート"=>320, "絵の具"=>820, "鉛筆"=>123, "消ゴム"=>82);
$array5 = array(500=>"筆箱", 320=>"ノート", 820=>"絵の具", 123=>"えんぴつ", 82=>"消ゴム");



$array6 = array(
    "筆箱"=>array(
        "カテゴリ"=>"文房具",
        "価格"=>500
    ),
    "ノート"=>array(
        "カテゴリ"=>"文房具",
        "価格"=>320
    ),
    "tシャツ"=>array(
        "カテゴリ"=>"衣類",
        "価格"=>680
    ),
    "靴下" => array(
        "カテゴリ"=>"衣類",
        "価格"=>223
    ),
);

foreach($array6 as $key=>$value){
    $keys[$key] = $value['価格'];
}
array_multisort($keys, SORT_ASC, $array6);
print_r($array6);


sort($array);
echo print_r($array). "<br>";
rsort($array1);
echo print_r($array1). "<br>";
sort($array2);
echo print_r($array2). "<br>";
asort($array3);
echo print_r($array3). "<br>";
arsort($array4);
echo print_r($array4). "<br>";
krsort($array5);
echo print_r($array5). "<br><br>";



$fruits = ["apple", "orange", "banana", "grape", "lemon", "aa"];

function compare_lenght($a, $b){
    if(strlen($a) === strlen($b)){
        return 0;
    }
    if(strlen($a) < strlen($b)){
        return -1;
    }
    return 1;
}

usort($fruits, "compare_lenght");
print_r($fruits);
*/

$a = '2024-01-01 09:11';
$date = strtotime($a);
echo $date

?>