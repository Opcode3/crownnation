<?php
    namespace app\config;

    class MysqlDBH implements DatabaseHandler{

        private $username = 'root';
        private $host = '127.0.0.1';
        private $password = '123';
        private $dbname = 'db_cn_001';
        private $charset = 'utf8mb4';
        private $port = '';
        private $connectionString;

        function __construct()
        {
            try {
                $dsn = "mysql:host=$this->host;port=$this->port;charset=$this->charset;dbname=$this->dbname";
                $this->connectionString = new \PDO($dsn, $this->username, $this->password);
            } catch (\Exception $ex) {
                die('Unable to access server...');
            }   
        }

        function connection()
        {
           return $this->connectionString;
        }
    }

?>