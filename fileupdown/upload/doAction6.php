<?php
error_reporting(E_ALL^E_NOTICE);
header('content-type:text/html;charset=utf-8');
require_once 'upload.class.php';
$upload=new upload('myFile1','imooc');
$dest=$upload->uploadFile();
echo $dest;