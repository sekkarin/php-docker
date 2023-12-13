<?php
namespace MyProject\Database;
include 'MySqlConnection.php';
include 'SqliteConnection.php';
class DatabaseConnectionFactory
{
    public static function createConnection($dbType, $config)
    {
        // print_r($dbType);
        switch ($dbType) {
            case 'mysql':
                return new MySqlConnection($config);
            case 'sqlite':
                return new SqliteConnection($config);
            
        }
    }
}
