<?php
  require_once('lib/init.php');

  // No special application logic for home page (at least for assignment #3)
  // except to include lib/init.php to initialize some constant

  $sql = "SELECT * FROM `users`";
  $result = $db->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      foreach($row as $name => $element){
        if($name != "pass"){
          echo $element . "<br>";
        }
      }
      ?>
      <img src="../img/<?=$row["user_id"]?>" />
      <?php
    }
  }
  include('view/index.php');
