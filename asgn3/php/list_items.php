<?php
  require_once('lib/items.php');

  // Controller for "listing multiple items"

  // Place holder with test data
  $items = [getItem(1), getItem(2), getItem(3)];


  // TODO: Retrieve all items from DB  and store them in $items.
?>


<?php include('view/list_items.php'); ?>
<?php
  $sql = "SELECT * FROM `items` ORDER BY `price` ASC";
  $result = $db->query($sql);
  $items = array();
  if($result->num_rows > 0){
    ?>
    <ul class="item">
    <?php
    while($row = $result->fetch_assoc()){
    ?>
    <li id="user_title"><a href=./item.php?id=<?=$row["item_id"]?>><?=$row["title"]?></a></li>
    <li id="user_price"><?=$row["price"]?></li>

    <?php
    }
    ?>
    </ul>
    <?php
  }
  ?>



