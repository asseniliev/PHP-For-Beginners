<?php 

function dd($variable){    //dump and die
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
  
  die();  
}

function urlIs($value){
  return $_SERVER['REQUEST_URI'] === $value;
}