<?php
namespace App;

// Objet pour la connection à une base de donnée
class Database
{
    private static $dbHost = "db";
    private static $dbName = "diplomes";
    private static $dbUser = "root";
    private static $dbUserPassword = "root";

    private static $connection = null;

// fonction qui permet la connection et le controle de la bd public pour avoir une fonction static
   
    public static function connect()
    {
        try
        {
            self::$connection = new \PDO("mysql:host=".self::$dbHost.";dbname=" .self::$dbName,self::$dbUser,self::$dbUserPassword);
        }
        catch (\PDOException $e)
        {   
            die($e->getMessage());
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }
}
?>