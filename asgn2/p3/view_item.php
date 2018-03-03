<?php
// Include the data to be used in this assignment
// Do not remove this line.
  include('lib/items.php');
  session_start();
?>

<!DOCTYPE html>
<html>
<head><title>View Single Item</title></head>
<body>

<?php include("menu.php") ?>

<?php
  $id = $_GET["id"];
  $item = $mockDb[$id];
  /*
    TODO:
    1. Retrieve the id of the item in the request
    2. If the id is valid (and matches one of the id of the item in $mockDb),
      show the followings in any format
      a. Title of the item
      b. Origin of the item
      c. Price of the item
      d. A form that allows the user to specify and submit the quantity of the
         current item to be added to the shopping cart.
  */
?>

<br>
Title: <?=$item["title"]?>
<br>
Origin: <?=$item["origin"]?>
<br>
Price: <?=$item["price"]?>
<br>

<form action="add_item.php" method="GET">
<input type="hidden" name="id" value=<?=$id?> />
<input type="text" name="quantity" value="1" />
<input type="submit" />
</form>

</body>
</html>
