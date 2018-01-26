<?php
  // The value of the two integers
    $num1 = " ";
    $num2 = "";
    $displayForm= true; // true => show form, false => show two numbers
  
    if(isset($_POST['submit'])){
        if(isset($_POST['num1']) && isset($_POST['num2'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        }
        
        if(is_numeric($num1) && is_numeric($num2) && ($num1 > $num2)){
            $displayForm = false;
        }
    }
/*
  if (current request is a POST request) {
    if (the two numbers exists in the request) {
      Reretrieve the two numbers from the request and assign them to $num1 and $num2

      if (the two numbers are valid integers) {
        $displayForm = false;
      }
    }
  }

}
*/

?><!DOCTYPE html>
<html>
<head>
<title>Problem #3</title>
</head>
<body>
<?php
    if ($displayForm) {
?>
    <form action="p3.php" method="POST">
        Please input num1: <input type="text" name="num1" value='<?=$num1?>'>
        <br>
        Please input num2: <input type="text" name="num2" value='<?=$num2?>'>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php
    } else {
?>
    num1 = <?=$num1?>
    <br>
    num2 = <?=$num2?>
<?php
    }
/* 
    Output HTML code of the form here.

    To create a sticky form, simply set the value of the input elements
    to $num1 and $num2 respectively.
  }
  else {
    Output the value of $num1 and $num2.
  }
*/
?>

</body>
</html>
