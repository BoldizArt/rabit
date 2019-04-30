<?php
/**
 * @file 
 * Boldizsar\RabIT\Model\DB;
 */
namespace Boldizsar\RabIT\Model;

class DB {

    /** @var PDO $conn */
    private static $conn;

    /** Set the database credentials */
    private static $host = "localhost";
    private static $name = "boldizsar_rabit";
    private static $user = "root";
    private static $pass = '';

    /**
    * Get database connection
    * @return mysqli
    */
    public static function getConnection() {

        self::$conn = null;

        try {
            self::$conn = new \PDO("mysql:host=" . self::$host . ";dbname=" . self::$name, self::$user, self::$pass);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return self::$conn;
    }
}