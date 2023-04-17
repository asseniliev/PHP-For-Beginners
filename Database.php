<?php

class Database {
  
  public $connection;
  public function __construct($config, $username = 'root', $password = '')
  {


    $dsn = 'mysql:' . http_build_query($config, '', ';');

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  
  public function query($query)
   {
      //create an sql query to browse the database
      $statement = $this->connection->prepare($query);

      //execute the query
      $statement->execute();

      //Fetch the result from the executed query
      return $statement;      
   }
}