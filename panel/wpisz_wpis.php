<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
echo ' cos jeblo z serwerem';
}
if (!mysqli_select_db($con,'test'))
{
echo 'cos jeblo z baza danuch';
}


$tytul = $_POST['tytul_w'];
$tytul_ang = $_POST['tytul_ang_w'];
$tresc = $_POST['tresc'];
$tresc_ang = $_POST['tresc_ang'];


$sql = "INSERT INTO wpis (tytul,tytul_ang,tresc,tresc_ang) VALUES ('$tytul','$tytul_ang','$tresc','$tresc_ang')";


if(!mysqli_query($con,$sql))
{
echo 'cos jeblo z dodawaniem';
}
else 
{
echo 'dodane';
}
header ("refresh:2; url=panel.php");