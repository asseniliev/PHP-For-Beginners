<?php

require 'functions.php';
//require 'router.php';

// connect to mySQL database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');

//create an sql query to browse the database
$statement = $pdo->prepare("select * from posts");

//execute the query
$statement->execute();

//Fetch the result from the executed query
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post){
  echo "<li>" . $post['title'] . "</li >";
}

//Visualize the result on the screen (dd() is defined in 'function.php')
//dd($posts[0]['title']);