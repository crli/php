<?php
session_start();
$image = imagecreatetruecolor(200,60);
$color=imagecolorallocate($image,255,255,255); 
imagefill($image,0,0,$color);
$fontface = 'msyh.ttf';
$str = '乾坤有序宇宙无疆星辰密布斗柄指航昼白夜黑日明月亮风驰雪舞电闪雷响云腾致雨露结晨霜虹霓霞辉雾沉雹降春生夏长秋收冬藏时令应候寒来暑往远古洪荒海田沧桑陆地漂移板块碰撞山岳巍峨湖泊荡漾植被旷野岛撒汪洋';
$strdb = str_split($str,3);
$captch_code = "";
for ($i=0; $i < 4; $i++) { 
 	$fontcolor = imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
 	$index = rand(0,count($strdb)-1);
 	$font = $strdb[$index];
 	$captch_code.= $font;
 	imagettftext($image, mt_rand(10,24), mt_rand(-60,60), ($i*50+20),mt_rand(30,35), $fontcolor, $fontface, $font);
 	
}
$_SESSION['authcode'] = $captch_code;
for($i=0;$i<200;$i++){
	$pointcolor = imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
	imagesetpixel($image, rand(1,199), rand(1,59), $pointcolor);
}
for($i=0;$i<3;$i++){
	$linecolor = imagecolorallocate($image,rand(80,220),rand(80,220),rand(80,220));
	imageline($image, rand(1,199), rand(1,59), rand(1,199), rand(1,59), $linecolor);
}
header('content-type:image/png');
imagepng($image);
imagedestroy($image);