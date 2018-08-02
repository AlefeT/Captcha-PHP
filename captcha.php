<?php
session_start();
$codigoCaptcha = substr(md5( time()) ,0,4);
$_SESSION['captcha'] = $codigoCaptcha;
$imagemCaptcha = imagecreatefrompng("img/fundocaptch.png");
$fonteCaptcha = imageloadfont("anonymous.gdf");
$corCaptcha = imagecolorallocate($imagemCaptcha,72,72,72);
imagestring($imagemCaptcha,$fonteCaptcha,15,5,$codigoCaptcha,$corCaptcha);
header("Content-type: image/png");
imagepng($imagemCaptcha);
imagedestroy($imagemCaptcha);

?>