<?php
  $view_title = 'ECLT 5830 Asgn3';
  include_once('top.php');

 ?>
<html>
<style type="text/css">
  @import url("../css/asgn3.css");
</style>
<?php
  $sql = "SELECT * FROM `users`";
  $result = $db->query($sql);
  if($result->num_rows > 0){
    ?>
    <table class="user">
    <?php
    while($row = $result->fetch_assoc()){
    ?>
    <td id="user_name"><?=$row["first_name"]?> <?=$row["last_name"]?></li>
    <td id="user_id"><?=$row["user_id"]?></li>
    </table>
    <?php
    }
  }
  ?>
  <div id="img_div">
  <img id="img_image" src="../img/2.jpg" />
  </div>
  
  </html>


<?php
  include_once('bottom.php');
?>
