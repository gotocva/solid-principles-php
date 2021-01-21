<?php

class MySQLConnection {
  
    public function connect() {
        // Return the MySQL connection...
        return mysqli_connect('localhost','root','','parkk');
    }
}

class UserDB {
  
    private $dbConnection;
    
    public function __construct(MySQLConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
  
    public function store($user) {
        // Store the user into a database...
        var_dump($this->dbConnection);
    }
}

$userDBObject = new UserDB(new MySQLConnection());
$userDBObject->store([]);