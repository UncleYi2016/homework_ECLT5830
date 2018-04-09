<?php
  session_start();
  require_once('data.php');
  if(isset($_GET['name'])){
    $s = $_GET['name'];
    $result = [];
    foreach($names as $name){
      if(strpos(strtolower($name),strtolower($s)) === 0){
        $result[] = $name;
      }
    }
    foreach($result as $r){
      echo "<li>" . $r . "</li>";
    }
  }
  
  
  // TODO: Write code here to
  // 1) Retrieve a string S sent from task2.html. Let this string be S.

  // 2) Retrieve all strings in $names[] in which S is their prefix (case sensitive).

  // Send the retrieved strings in the response (you have to figure out how to
  // format these strings)
  
 ?>
