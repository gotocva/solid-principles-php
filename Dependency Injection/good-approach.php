<?php

interface DBConnectionInterface {
    public function connect();
}

class MySQLConnection implements DBConnectionInterface {
  
    public function connect() {
        // Return the MySQL connection...
        return mysqli_connect('localhost','root','','parkk');
    }
}

class UserDB {
  
    private $dbConnection;
    
    public function __construct(DBConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection->connect();
    }
  
    public function store($user) {
        // Store the user into a database...
        var_dump($this->dbConnection);
    }
}


$userDBObject = new UserDB(new MySQLConnection());
$userDBObject->store([]);