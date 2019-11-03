<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use Libraries\DatabaseConnection;

/** @var array $connectionData */
$connectionData = require_once $_SERVER['DOCUMENT_ROOT'].'/config/database.php';

/** @var PDO $database */
$database = DatabaseConnection::getConnection($connectionData);

// Queries example

$users = $database->query("select * from users")->fetchAll();

$user = $database->query("select * from users where id = 1")->fetch();

// Так ви зрозумієте різницю між fetchAll і fetch

var_dump($users);

var_dump($user);



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example</title>
</head>
<body>


    <?php foreach ($users as $user) : ?>

    <div>Name:</div> <span><?php echo $user['first_name'].' '. $user['last_name'] ?></span>

    <?php endforeach; ?>


</body>
</html>
