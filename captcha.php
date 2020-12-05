<?php
session_start();
$session_value = session_id();

header ("Content-Type: image/png  ");

$font = "LaBelleAurore.ttf";
$font1 = "OpenSans-Regular.ttf";

$im = imagecreatetruecolor ( 400, 400 );

$yellow = imagecolorallocate ($im, 229, 255, 204 );
$black = imagecolorallocate ($im,0, 0, 0);
$color = imagecolorallocate ($im,255,0,0 );

imagefilledrectangle ($im, 0, 0, 400, 400, $color );
imagefilledrectangle ($im, 10, 10, 390, 390, $yellow );

imageline($im, rand(0,500),rand(0,500), rand(0,350), rand(0,350) , $black);
imageline($im, rand(0,500),rand(0,500), rand(0,350), rand(0,350) , $black);
imageline($im, rand(0,500),rand(0,500), rand(0,350), rand(0,350) , $black);
imageline($im, rand(0,500),rand(0,500), rand(0,350), rand(0,350) , $black);
imageline($im, rand(0,500),rand(0,500), rand(0,350), rand(0,350) , $black);
imageline($im, rand(0,500),rand(0,500), rand(0,350), rand(0,350) , $black);

$letters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$len = strlen($letters);
$letter = $letters[rand(0, $len-1)];

$text_color = imagecolorallocate($im,0,0,0,$font);
for ($i = 0; $i< 4;$i++) 
{

    $letter = $letters[rand(0, $len-1)];
    imagestring($im, 5,  5+($i*30), 20,$text_color);
    $word.=$letter;

}
for ($i = 0; $i< 4;$i++) 
{

    $letter = $letters[rand(0, $len-1)];
    imagestring($im, 5,  5+($i*30), 20,$text_color);
    $word1.=$letter;

}

$_SESSION['captcha_string'] = $word;

//$text1 = substr ( str_shuffle (md5 (time() ) ), 0,4 ) ;

imagettftext ($im,15, 0, rand(50, 100),rand(50,100),$black, $font, $word );
imagettftext ($im,15, 0, rand(100, 330),rand(100,330),$black, $font, $word1 );

$text3 = "Captcha: $word$word1 ";
$_SESSION["captcha"] = $word . $word1;


imagettftext ($im, 13, 0, 20, 380, $black, $font1, $text3);
imagettftext ($im, 13, 0, 10, 350, $black, $font1, "The Session id: ". $session_value);

imagepng ($im) ;
imagedestroy ($im); 



?>
