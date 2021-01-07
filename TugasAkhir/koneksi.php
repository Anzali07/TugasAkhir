<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$db = '1810530202_webd';

$link = mysqli_connect($host, $user, $password, $db);

if (!$link) {
	die(mysqli_connect_error());
}

// echo "Ah Mantap";

?>

