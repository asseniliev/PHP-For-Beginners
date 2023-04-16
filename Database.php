<?php

class Database {
  
  public $connection;
  public function __construct()
  {
    // connect to mySQL database
    $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

    $this->connection = new PDO($dsn, 'root');
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