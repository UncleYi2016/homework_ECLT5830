<html>
<style type="text/css">
  @import url("../css/asgn3.css");
</style>
<?php
  require_once('lib/init.php');

  // No special application logic for home page (at least for assignment #3)
  // except to include lib/init.php to initialize some constant

  include('view/index.php');
  $sql = "SELECT * FROM `users`";
  $result = $db->query($sql);
  if($result->num_rows > 0){
    ?>
    <?php
    while($row = $result->fetch_assoc()){
    ?>
    <div class="user">
    <ul class="user">
    <li id="user_name"><?=$row["first_name"]?> <?=$row["last_name"]?> </li>
    <li id="user_id"><?=$row["user_id"]?></li>
    </ul>
    </div>
    <?php
    }
  }
  <img src="../img/2.jpg" />
  ?>
  </html>
