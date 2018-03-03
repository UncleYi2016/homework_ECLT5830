<?php
  // Include the data to be used in this assignment
  // Do not remove this line.
  include('lib/items.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart</title>
</head>
<body>

<?php include("menu.php") ?>

<table>
<th>Item</th>
<th>Quantity</th>
<?php
var_dump($_SESSION["cart"]);
  if(isset($_SESSION["cart"])){
    foreach ($_SESSION["cart"] as $id => $quantity){
?>
  <td><?=$mockDb[$id]["title"]?></td>
  <td><?=$quantity?></td>
<?php
  }
}
  // TODO: Show the content of the shopping cart (in any format) here.
?>
</table>
<?PHP
  // TODO: Add a link here, when clicked, will send a request to the server
  //       to clear all the content in the shopping cart.
  //      You have to decide how to implement this feature.
?>

</body>
</html>
