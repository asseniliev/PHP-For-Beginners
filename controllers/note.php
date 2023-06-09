<?php 


$config = require('config.php');
$db = new Database($config['database']);

$header = "Note";

$note = $db->query('select * from notes where id = :id', [
  'id' => $_GET['id']  
  ])->fetch();

if(!$note){
  abort(Response::NOT_FOUND);
}


$currentUserId = 1;
if($note['user_id'] !== $currentUserId){
  abort(Response::FORBIDDEN);
}

//dd($notes);

require "./views/note.view.php";