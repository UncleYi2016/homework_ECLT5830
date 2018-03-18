<?php
  $view_title = 'Item Listing';
  include_once('top.php');
 ?>

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
<p>
For each item, show only the title (inside a link) and the price of the item.
The URL of the link should be "item.php?id=ITEM_ID",
where ITEM_ID is an integer representing the item's ID.
</p>



<?php include_once('bottom.php'); ?>
