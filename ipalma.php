<?php 
$ac = fopen("al.txt",a);
$al = $_SERVER['REMOTE_ADDR'];
$yaz = fwrite($ac,$al);
fclose($ac);
 ?>