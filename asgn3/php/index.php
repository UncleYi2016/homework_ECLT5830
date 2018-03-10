<?php
  require_once('lib/init.php');

  // No special application logic for home page (at least for assignment #3)
  // except to include lib/init.php to initialize some constant

  $sql = "SELECT * FROM `users`";
  $result = $db->query($sql);
  if($result->num_rows > 0){
    ?>
    <ul>
    <?php
    while($row = $result->fetch_assoc()){
      foreach($row as $name => $element){
        if($name != "pass"){
          echo "<li class='user' id='". $name ."'>" . $element . "</li>";
        }
      }
      ?>
      <li><img src="../img/<?=$row["user_id"]?>.jpg" /></li>
      <?php
    }
    ?>
    </ul
    <?php
  }
  include('view/index.php');
