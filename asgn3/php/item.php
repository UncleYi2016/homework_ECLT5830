<?php
  require_once('lib/items.php');

  // Controller for "viewing a single item"

  // Place holder for test data
  $item = getItem(1);

  // TODO: Read item ID from request,  retrieve the item from DB, and store
  // the item in $item

?>

<?php include('view/item.php'); ?>
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
