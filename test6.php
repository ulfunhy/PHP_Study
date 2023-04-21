<?php
// 1. 저장 = 쓰기
$filename = "data.txt";
// $fp = fopen($filename,"w");     // w는 읽기(덮기도 가능), a는 추가
// $str = "Mary had a dog";
// $str1 = "Tom had a cat";
// fwrite($fp,$str);
// fwrite($fp,$str1);

// fclose($fp);
// echo "저장되었습니다.";

// 2. 파일 읽기
$fp = fopen($filename,"r");
while(!feof($fp)){      // end of file       fp가 끝날때까지
    // echo fgetc($fp);
    echo fgets($fp);
}

?>