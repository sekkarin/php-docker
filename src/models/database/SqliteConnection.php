<?php
namespace MyProject\Database;

class SqliteConnection
{
    private $dbFile;
    private $conn;

    public function __construct($config)
    {
        $this->dbFile = $config['dbFile'];

        $this->conn = new \SQLite3($this->dbFile);

        if (!$this->conn) {
            die("SQLite Connection failed");
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}
