<?php

//phpinfo();

$dsn = "mysql:host=mysql;dbname=patterns";
$user = "user";
$password = "user";

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

echo 'Успешно соединились';

unset($dbh);
