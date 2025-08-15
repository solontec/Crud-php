<?php
declare(strict_types=1);


class connect{

    private string $hostname;
    private string $username;
    private string $database;
    private string $password;
    
    public function __construct($host, $user, $db, $pass) {
        $this->hostname = $host;
        $this->username = $user;
        $this->database = $db;
        $this->password =  $pass;
    }

    public function connect(){
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
    }
}


