<?php

class UserData {
  
  private $dbConnection;
  
  public function __construct(MySQLConnection $dbConnection) {
      $this->$dbConnection = $dbConnection;
  }

  public function store(User $user) {
      // Store the user into a database...
  }
}

// In this case, the UserData class depends directly on the MySQL database. That means that if we would change the database engine in use we need to rewrite this class and violate the Open-Close Principle.



//---------------------------------------------------------------------------------
interface ConnectionInterface {
  public function connect();
}

class DbConnection implements ConnectionInterface {
    public function connect()
    {
      return "connected to the database";
    }
}

class UserDB {

    private $dbConnection;
    public function __construct(ConnectionInterface $dbConnection)
    {
      $this->dbConnection = $dbConnection;
    }
    public function store(User $user) 
    {
      // Store the user into a database...
      return "user stored in the database";
    }
}

$db = new DbConnection();
var_dump($db->connect());

$userdb = new UserDB($dbConnection);
var_dump($userdb->store($user));