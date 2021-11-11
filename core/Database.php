<?php

class Database {
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DB_NAME = 'bookstoredb';
    const DB_PORT = '3307';

    public function connect() {
        $host = self::HOST;
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $dbname = self::DB_NAME;
        $port = self::DB_PORT;
        try {
            $connect = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $connect;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
