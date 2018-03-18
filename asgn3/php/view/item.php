<?php
  // Note: This file expect the item to be rendered is placed
  // in an associative array "$item".
  $view_title = $item['id'] . ": " . $item['title'];
  include_once('top.php');
?>

<?php
  $id = $_GET["id"];
  $sql = "SELECT * FROM `items` WHERE `item_id` = " . $id;
  $sql_comment = "SELECT `msg` FROM `comments` WHERE `item_id` = " . $id;
  $result = $db->query($sql);
  $result_comment = $db->query($sql_comment);
  if($result->num_rows > 0){
    $row = $result->fetch_assoc();
?>
    <ul>
      <li>ID : <?=$row["item_id"]?></li>
      <li>Title : <?=$row["title"]?></li>
      <li>Description : <?=$row["description"]?></li>
      <li>Price : <?=$row["price"]?></li>
      <li>Add on : <?=$row["added_on"]?></li>
      <li><img src='../img/<?=$row["img"]?>' /> </li>
      <h4>Comments : </h4>
        <ol>
          <?php
          while ($row_comment = $result_comment->fetch_assoc()){
          ?>
            <li><?=$row_comment["msg"]?></li>
          <?php
          }
          ?>
        </ol>
    </ul>
<?php
  }
?>

<?php
  include_once('bottom.php');
?>
