<?php

namespace Libraries;

use Exception;
use PDO;


/**
 * DatabaseConnection
 *
 * Singleton
 *
 * Клас обгортка для pdo
 *
 */
final class DatabaseConnection
{
    /** @var PDO | null */
    private static $connection = null;


    /**
     * DatabaseConnection constructor.
     */
    private function __construct()
    {
    }

    /**
     *
     */
    private function __clone()
    {
    }

    /**
     *
     */
    private function __wakeup()
    {
    }

    /**
     * @param array $config
     * @throws Exception
     */
    public static function getConnection(array $config = [])
    {
        if (empty($config)) {
            throw new Exception('Передайте дані для підключення до бази даних');
        }

        if (is_null(self::$connection)) {

            list(
                'host' => $host,
                'database' => $database,
                'user' => $user,
                'password' => $password,
                'charset' => $charset
                ) = $config;

            /** @var string $dsn */
            $dsn = "mysql:host={$host};dbname={$database};charset=$charset";

            /** @var array $opt */
            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            self::$connection = new PDO($dsn, $user, $password, $opt);

        }

        return self::$connection;
    }
}
