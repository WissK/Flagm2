<?php
Class DB {

     private $host = 'localhost';
     private $user = 'root';
     private $pass = '';
     private $db = 'not-online';

    public function connect()
    {
        $conn_str = "mysql:host=$this->host;dbname=$this->db";
        $conn = new PDO($conn_str, $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

    public function connect2()
    {
        $conn_str = "mysql:host=localhost;dbname=online-db";
        $conn = new PDO($conn_str, $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

}

    


    


