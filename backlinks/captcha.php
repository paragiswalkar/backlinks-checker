<?php
session_start();
/***************  Do not edit the script below (Except color for the Captcha Font) *************/

$string = '';

for ($i = 0; $i < 5; $i++) {
	// this numbers refer to numbers of the ascii table (lower case)
	$string .= chr(rand(97, 122));
	}

$_SESSION['rand_code'] = $string;

$dir = 'fonts/';

$image = imagecreatetruecolor(73, 17);
$black = imagecolorallocate($image, 0, 0, 0);
$color = imagecolorallocate($image, 200, 100, 90); // red color
$white = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image,0,0,399,99,$white);
imagettftext ($image, 12, 0, 10, 13, $color, $dir."arial.ttf", $_SESSION['rand_code']);

header("Content-type: image/png");
imagepng($image);

?>