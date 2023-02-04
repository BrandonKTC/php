<?php

namespace Core;

use PDO;
use PDOException;

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
            $host = 'localhost';
            $dbname = 'mvc';
            $username = 'root';
            $password = 'mysql';

            try {
                $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

                return $db;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
