<?php
// 1. 1부터 10까지의 합 구하기
$sum = 0;
for($i = 1; $i < 11; $i++){
    $sum += $i;
}
echo "1부터 10까지의 합 : $sum<br>";

// 2. 1부터 100사이의 짝수의 합 구하기
$sum = 0;
for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0){
        $sum += $i;
    }
}
echo "1부터 100사이의 짝수의 합 : $sum<br>";

// 3. $num = 5일 때 짝수인지 홀수인지 판별하기
$num = 5;
if($num % 2 == 0){
    echo "$num 은/는 짝수입니다.<br>";
}else{
    echo "$num 은/는 홀수입니다.<br>";
}

// 4. 1부터 100사이의 3의 배수 출력
$sum = 0;
for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0){
        echo $i." ";
    }
}
echo "<br>";

// 5. 2단부터 5단까지 출력

// 6. 3, 4, 5, 를 가지고 삼각형의 넓이를 구하시오.

?>