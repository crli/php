<?php
session_start();
$table = array(
	'pic0'=>'脸',
	'pic1'=>'漫画',
	'pic2'=>'胸',
	'pic3'=>'背',
	'pic4'=>'I'
);
$index = rand(0,4);
$value = $table['pic'.$index];
$_SESSION['authcode'] = $value;

$filename =dirname(__FILE__).'\pic'.$index.'.jpg';
$contents = file_get_contents($filename);
header('content-type:image/jpg');
echo $contents;