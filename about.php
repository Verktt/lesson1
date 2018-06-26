<?php header("refresh: 2"); ?>

<?php
	
	$name = "Тарас";
	$age = "21 год";
	$email = "mamonovt@inbox.ru";
	$city = "Тюмень";
	$about = "Cтудент Нетологии.";
?>

<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title><?= $name . ' _ ' . $about ?></title>
		<style>
			body {
				font-family: sans-serif;
			}
		</style>
	</head>
	<body>
		<h1>Страница пользователя <?= $name ?></h1>
		 <dl>
            <dt>Имя</dt>
            <dd><?= $name ?></dd>
            <dt>Возраст</dt>
            <dd><?= $age ?></dd>
            <dt>Адрес электронной почты</dt>
            <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
            <dt>Город</dt>
            <dd><?= $city ?></dd>
            <dt>О себе</dt>
            <dd><?= $about ?></dd>
        </dl>
	</body>
</html>