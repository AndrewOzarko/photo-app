<?php


use Libraries\DatabaseConnection;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

/** @var array $connectionData */
$connectionData = require_once $_SERVER['DOCUMENT_ROOT'].'/config/database.php';


//$db = new DatabaseConnection($connectionData);
DatabaseConnection::getConnection($connectionData);

echo '<br>';
DatabaseConnection::getConnection($connectionData);

