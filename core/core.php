<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/core/helpers.php';


use Libraries\DatabaseConnection;


/** @var array $connectionData */
$connectionData = require_once $_SERVER['DOCUMENT_ROOT'].'/config/database.php';

/** @var PDO $database */
$database = DatabaseConnection::getConnection($connectionData);


session_start();
