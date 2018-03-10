<?php
  require_once('lib/init.php');

  // No special application logic for home page (at least for assignment #3)
  // except to include lib/init.php to initialize some constant

  $sql = "SELECT * FROM `users`";
  $result = $db->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      foreach($row as $element){
        echo $element . "<br>";
      }
    }
  }
  include('view/index.php');
