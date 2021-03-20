<?php

namespace Core;

class Database
{
    protected static $db;

    private function __construct()
    {
        try {
            self::$db = new \PDO(DATABASE_DRIVER . ":host=" . DATABASE_HOST . ";port=" . DATABASE_PORT . ";dbname=" . DATABASE_NAME, DATABASE_USER, DATABASE_PASSWD);
            self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$db->exec('SET NAMES utf8');
        } catch (\PDOException $e) {
            die("Connection Error: " . $e->getMessage());
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
