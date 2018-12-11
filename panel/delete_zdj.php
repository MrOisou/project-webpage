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


$id_zdj = $_POST['zdj_id'];


$sql = " DELETE FROM zdjecia WHERE id='$id_zdj'";

if(!mysqli_query($con,$sql))
{
echo 'cos jeblo z usuwaniem';
}
else 
{
echo 'usuniete';
}
header ("refresh:2; url=panel.php");

?>