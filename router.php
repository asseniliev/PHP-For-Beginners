<?php
require 'Response.php';
//require 'functions.php';

function abort($code){
  http_response_code($code);  
  require "views/{$code}.php";
  die();
}

function routeToController($uri, $routes){
  if(array_key_exists($uri, $routes)){
    require $routes[$uri];
  } else {
    abort(Response::NOT_FOUND);
  }
}

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

$routes = [
  '/' => "controllers/index.php",
  '/about' => "controllers/about.php",
  '/notes' => "controllers/notes.php",
  '/note' => "controllers/note.php",
  '/contact' => "controllers/contact.php"
];

routeToController($uri, $routes);


