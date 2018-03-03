<?php
// Include the data to be used in this assignment
// Do not remove this line.
  include('lib/items.php');

  /*
    TODO:
    1. Retrieve item id and quantity of the item from the request.
    2. If the id matches one of the item's id in $mockDb,
         If the shopping cart does not yet contained the item
           Add an entry to the shopping cart
         else
           Update the quanity of the item in the shopping cart

  */
  session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Add Item</title>
</head>
<body>

<?php include("menu.php") ?>

<?php
if(isset($_GET["type"]) && $_GET["type"]=="clear"){
  if(session_destroy()){
    echo "Session clean up!";
  }else{
    echo "Session clean failed!";
  }
}else{
  if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
  }
  $id = $_GET["id"];
  $quantity = $_GET["quantity"];
  if(!is_numeric($quantity)){
    echo "Please input number of quantity";
  }else{
    if(isset($mockDb[$id])){
      $_SESSION['cart'][$id] = $quantity;
    }
    echo "Item added to cart";
  }
}
  


/*
  TODO: Output a message to indicate if an item has been successfully
        added to the cart.
*/
?>

</body>
</html>
