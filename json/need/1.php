<?php
header('Content-Type:application/json;charset=utf-8');  
$a = file_get_contents('php://input');
var_dump($a);
echo "aa";
?>