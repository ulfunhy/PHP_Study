<?php
$arr = array("apple", "banana", "mango", "grape", "melon");

//출력
for($i = 0; $i < sizeof($arr); $i++){
    echo $arr[$i]."<br>";
}
foreach($arr as $item){
    echo $item."<br>"
}

$str = "php is a popular scripting language";
echo strlen($str);
?>