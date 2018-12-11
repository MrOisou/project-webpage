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


$id_wpis = $_POST['wpis_id'];


$sql = " DELETE FROM wpis WHERE id='$id_wpis'";

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