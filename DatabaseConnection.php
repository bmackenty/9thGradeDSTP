<?php

// this file should be named DatabaseConnection.php
//
// this class is used to open a connection to your database.
// Anytime you need to connect to a database, you must create an instance of this class.
// 
// to setup this file, please find the email I sent with your account information 
// you need to replace YOURUSERNAME with your username. You need to do this twice
// you need to replace YOURPASSWORD with your password. You only need to do this once.
// 
// There is a method named `connect` which, if connection is NOT TRUE
// throws an exception, allowing us to understand the reason why we could not connect 
// to the database

class DatabaseConnection {
    private $host = 'localhost';
    private $username = 'YOURUSERNAME';
    private $password = 'YOURPASSWORD';
    private $database = 'YOURUSERNAME';
    private $connection;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        
        if (!$this->connection) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}

// Example usage:
// $db = new DatabaseConnection();
// $connection = $db->getConnection();
