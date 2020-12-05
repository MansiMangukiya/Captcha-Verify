<?php
session_start();

$captcha =$_GET["captcha"];
$ucid = $_GET["ucid"];

$actual =$_SESSION["captcha"];

if ($captcha == $actual)
{
    echo "The captcha is Correct!!! <br><br>" ;

}
else 
{
    echo "The captcha is Wrong <br>" ;
    header ("refresh:3; url=captcha.html");
    exit ();
}
if ($ucid == "mpm58")
{
    echo "The ucid is correct!! <br>";
}
else 
{
    echo "The ucid is wrong. You are being redirected <br>";
    header ("refresh:3; url=captcha.html");
    exit();
}
?>
