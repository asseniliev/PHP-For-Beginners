<?php

require 'functions.php';
//require 'router.php';

require 'database.php';


$db = new Database();
$posts = $db->query("select * from posts where id > 2")->fetchAll(PDO::FETCH_ASSOC);

// foreach($posts as $post){
//   echo "<li>" . $post['title'] . "</li >";
// }

//Visualize the result on the screen (dd() is defined in 'function.php')
dd($posts);