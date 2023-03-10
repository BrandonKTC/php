<?php

namespace Core;

use PDO;
use PDOException;
use App\Config;

/**
 * Base Model
 * 
 * PHP version 7.4
 */
abstract class Model
{
    /**
     * Get the PDO database connection
     * 
     * @return mixed
     */
    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {

            $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' .
                Config::DB_NAME . ';charset=utf8';
            $db = new PDO($dsn, Config::USERNAME, Config::PASSWORD);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
        }
    }
}
