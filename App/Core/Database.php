<?php

namespace App\Core;

use Dotenv\Dotenv;

class Database
{
    protected static $db;

    private function __construct()
    {
        $dotenv = Dotenv::createImmutable(ROOT_PATH);
        $dotenv->load();

        try {
            self::$db = new \PDO("{$_ENV['DB_DRIVER']}:host={$_ENV['DB_HOST']};port={$_ENV['DB_PORT']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWD']);
            self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$db->exec('SET NAMES utf8');
        } catch (\PDOException $e) {
            die("Connection Error: {$e->getMessage()}");
        }
    }

    public static function connect()
    {
        if (!self::$db) {
            new Database;
        }
        return self::$db;
    }
}
