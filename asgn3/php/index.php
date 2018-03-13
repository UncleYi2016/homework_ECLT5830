<html>
<style type="text/css">
  @import url("../css/asgn3.css");
</style>
<?php
  require_once('lib/init.php');

  // No special application logic for home page (at least for assignment #3)
  // except to include lib/init.php to initialize some constant

  $sql = "SELECT * FROM `users`";
  $result = $db->query($sql);
  if($result->num_rows > 0){
    ?>
    <?php
    while($row = $result->fetch_assoc()){
    ?>
    <div class="user">
    <ul class="user">
    <?php
      foreach($row as $name => $element){
        if($name != "pass"){
          echo "<li style='float: left; width: 40%' id='". $name ."'>" . $element . "</li>";
        }
      }
      ?>
      </ul>
      </div>
      <?php
    }
    ?>
    <img src="../img/<?=$row["user_id"]?>.jpg" />
    <?php
  }
  include('view/index.php');
  ?>
  </html>
