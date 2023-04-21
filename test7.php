<?php
// fread($fp, 파일크기)
$fp = fopen($filename,"r");
$result = fread($fp, filesize($filename));
echo $result;
fclose($fp);
?>