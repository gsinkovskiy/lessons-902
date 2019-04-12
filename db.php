<?php

$db = new PDO('mysql:host=localhost;dbname=test', 'dev', 'dev', [
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
]);

$sql = 'SELECT id, first_name, last_name, email 
		FROM users 
		WHERE email = :param
		ORDER BY last_name';
$query = $db->prepare($sql);
$query->bindParam('param', $_GET['email']);
$query->execute();
var_dump($db->errorInfo());
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>JavaScript</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Email</th>
		</tr>
		<?php foreach ($query as $row): ?>
			<tr>
				<td><?= $row['id'] ?></td>
				<td><?= $row['first_name'] ?></td>
				<td><?= $row['last_name'] ?></td>
				<td><?= $row['email'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
