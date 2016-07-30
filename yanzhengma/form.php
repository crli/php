<?php
if (isset($_REQUEST['authcode'])) {
	session_start();
	if (strtolower($_REQUEST['authcode'])==$_SESSION['authcode']) {
		echo "<script>alert('验证成功');window.location.href='http://www.imooc.com/';</script>";
	} else {
		echo "<script>alert('验证错误')</script>";
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="./form.php" method="post">
		<p>验证码图片：<img id="authcode_img" border="1" src="./captcha.php?r=<?php echo rand(); ?>" alt="" width="100"/>
		<a href="javascript:void(0)" onclick="document.getElementById('authcode_img').src='./captcha.php?r='+Math.random()">换一个?</a></p>
		<P>请输入图片中内容 <input type="text" name="authcode" id="" /></P>
		<p><input type="submit" value="提交" style="padding: 6px 20px" /></p>
	</form>
</body>
</html>