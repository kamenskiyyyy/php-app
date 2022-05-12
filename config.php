<?php
$user = 'root';
$password = 'root';
$db = 'php-mysql-app';
$host = 'localhost';
$port = 8889;

$mysql = new mysqli($host, $user, $password, $db);
$mysql->query('SET NAMES "utf8mb4"');

if ($mysql->connect_error) {
    echo "Error Number: " . $mysql->connect_errno . '<br>';
    echo "Error: " . $mysql->connect_error;
} else {
    echo "Host unfo: ".$mysql->host_info;
//    $mysql->query('CREATE TABLE `users` (
//    id INT(11) NOT NULL ,
//    name VARCHAR(50) NOT NULL ,
//    bio TEXT NOT NULL ,
//    PRIMARY KEY (id)
//)');
}

$mysql->close();
