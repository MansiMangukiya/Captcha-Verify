session_start();

header ("content-Type: image/png  ");

$font = "LaBelleAurore.ttf";

$im = imagecreatetruecolor ( 400, 400 );

$white = imagecolorallocate ($im, 255, 255, 255 );
$black = imagecolorallocate ($im,0, 0, 0 );

imagefilledrectangle ($im, 10, 10, 390, 390, $white );

$text1 = " Good";
$text2 = " Bye";
$_SESSION ["captcha"] = $text1 . $text2 ;

imagettftext ($im,20, 0, 50, 200, $black, $font, $text1 );
imagettftext ($im, 30, -60, 200, 50, $black, $font, $text2 );
imagettftext ($im, 30, 0, 20, 380, $black, $font, "stuff" );


imagepng ($im) ;
imagedestroy ($im);



?> 

