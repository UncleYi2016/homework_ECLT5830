<?php
  session_start();
  require_once('data.php');
  $s = $_GET['name'];
  $result = [];
  foreach($names as $name){
    if(strpos($name,$s) === 0){
      $result[] = $name;
    }
  }
  foreach($result as $r){
    echo $r;
  }
  
  // TODO: Write code here to
  // 1) Retrieve a string S sent from task2.html. Let this string be S.

  // 2) Retrieve all strings in $names[] in which S is their prefix (case sensitive).

  // Send the retrieved strings in the response (you have to figure out how to
  // format these strings)
  
 ?>
