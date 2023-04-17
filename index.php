<?php

require 'functions.php';
//require 'router.php';

require 'database.php';

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = {$id}}";

$posts = $db->query($query, [$id])->fetchAll();


// foreach($posts as $post){
//   echo "<li>" . $post['title'] . "</li >";
// }

//Visualize the result on the screen (dd() is defined in 'function.php')
dd($posts);