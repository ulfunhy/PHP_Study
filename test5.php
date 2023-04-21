<style>
h1{
    color:navy;
}
</style>
<?php
echo "<h1>1. strlen</h1>";
$str = "php is a popular scripting language";
echo strlen($str);
echo ("<br>");
?>
<hr>
<?php
$var1 = "hello";
$var2 = "Hello";
$result = strcmp($var1,$var2);
echo "result : ".$result;
?>
<hr>
<?php
$str = "abcdef";
$find = "c";
$pos = strpos($str, $find);
echo "pos : ".$pos;
?>
<hr>
<?php
$str = "Mary had a Little lamb and she loved IT so MUCH";
echo strtolower($str)."<br>";
echo strtoupper($str);
?>
<hr>
<?php
$str = "hellophpwelcome";
$result = substr($str, 5, 5);
echo $result."<br>";
$result2 = substr($str,3);
echo $result2;
?>
<hr>
<?php
$arr = array("pizza1","pizza2","pizza3","pizza4","pizza5");
$str = implode(",",$arr);
echo "implode:".$str;
?>
<br/><hr>
<?php
$str = "apple/mango/srawberry/melon";
$ar = explode("/",$str);
// 배열 값 출력 foreach 사용
foreach($ar as $item){
    echo $item." ";
}
?>
<br/><hr>
<?php
$txt = "You should eat fruits, shoud not buy";
$result = str_replace("should","could",$txt);
echo "변경전 문자열".$txt;
echo "변경후 문자열".$result;
?>