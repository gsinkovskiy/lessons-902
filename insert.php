<?php

$db = new PDO('mysql:host=localhost;dbname=test', 'dev', 'dev', [
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
]);

$sql = 'INSERT INTO users (first_name, last_name, email, password) 
		VALUES (:first_name, :last_name, :email, :password)';
$query = $db->prepare($sql);
$query->bindValue('first_name', 'Тарас');
$query->bindValue('last_name', 'Шевченко');
$query->bindValue('email', 'taras@shevchenko');
$query->bindValue('password', 'Тарас');
$query->execute();
var_dump($db->errorInfo());
?>

