<?php
// namespace Database;
namespace MyProject\Database;

class MysqlConnection
{
    private $host = "";
    private $username = "";
    private $password = "";
    private $database = "";
    private $conn;

    public function __construct($config)
    {
        // $this->host = $config['host'];
        // $this->username = $config['username'];
        // $this->password = $config['password'];
        // $this->database = $config['database'];
        // // $this->host, $this->username, $this->password, $this->database
        // // $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        // $dsn = "mysql:host=db;dbname=MYSQL_DATABASE;charset=UTF8";
        // // $dsn = "mysql:host=$this->host;dbname=$this->database;charset=UTF8";
        // $options = [
        //     \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        //     \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        //     \PDO::ATTR_EMULATE_PREPARES   => false,
        // ];
        // try {
        //     $this->conn = new \PDO($dsn,"MYSQL_USER","MYSQL_PASSWORD",$options);
        //     // $this->conn = new \PDO($dsn,$this->username,$this->password,$options);
        
        // } catch (\PDOException $e) {
        //     die("Connection failed: " . $e);
        // }
    }

    public function getConnection()
    {
        // echo ("conneted");
        return $this->conn;
    }

    public function closeConnection()
    {
        $this->conn = null;
    }
}
