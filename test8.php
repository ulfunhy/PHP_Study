<?php
if($_COOKIE[counter]){
    setcookie("counter",$_COOKIE[counter]+1);
}else{
    setcookie("counter","1");
}
echo "당신은 $_COOKIE[counter]번째 방문하셨습니다.";
?>