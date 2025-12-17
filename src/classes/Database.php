<?php

class Database {
    public $connection;

    public function __construct($config, $username = 'user', $password = 'password') {
        $this->connection = new mysqli(
            $config['host'],
            $username,
            $password,
            $config['dbname'],
            $config['port']
        );
        if($this->connection->connect_error){
            die('Connection failed : ' . $this->connection->connect_error);
        }
        $this->connection->set_charset($config['charset']);

    }

    public function query($query, $params = []) {
        $statement = $this->connection->prepare($query);
        
        if(!$statement){
            return false;
        }
        
        $statement->execute($params);
        if (str_starts_with(strtolower(trim($query)), "select")) {
            $result = $statement->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return true;
    }
}
