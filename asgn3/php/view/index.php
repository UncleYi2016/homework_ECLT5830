
<html>
<style type="text/css">
  @import url("../css/asgn3.css");
</style>
<?php
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
    <li id="user_name"><?=$row["first_name"]?> <?=$row["last_name"]?> <?=$row["user_id"]?></li>
    </ul>
    </div>
    <?php
    }
  }
  ?>
  <div id="img_div">
  <img id="img_image" src="../img/2.jpg" />
  </div>
  
  </html>


<pre>
<?php
  // This is only a place holder
  print_r($item);
?>
</pre>


<?php
  include_once('bottom.php');
?>
