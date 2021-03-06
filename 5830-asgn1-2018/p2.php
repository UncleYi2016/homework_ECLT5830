<?php
  $languages = array( "C", "C#", "C++", "Java", "JavaScript",
                      "Visual Basic", "Pascal", "Phyton", "PHP",
                      "Perl", "Objective C" );
?><!DOCTYPE html>
<html>
<head>
<title>Problem #2</title>
</head>

<style type="text/css">
label { font-weight: bold; }
</style>

<body>
<form action="" method="GET">
<label>Select the programming language(s) you like:</label> <br/>
<ul>
<?php
  // TODO (Part 1): Create checkboxes in this form to let the user select
  // zero or more programming languages listed in $languages[].

  // Note: If you give all checkboxes the same name like "foobar[]", then
  // you can retrieve the selected values in an array in "Part 2" as
  // $_GET['foobar'].
  // i.e., the datatype of $_GET['foobar'] will be an array of strings.

  // Note: If you assign a "careflly crafted value" to the attribute "value"
  // of the checkbox's input element, you can easily find out the selected
  // programming languages in Part 2.
  foreach($languages as $key=>$value){
?>
   <li><input type="checkbox" name="language[]" value=<?=$key?>><?=$value?></input></li>
<?php } ?>
</ul>
<input type="submit" name="submit" value="Submit">
</form>
<ul>
<?php
  // If the user had submitted the form by clicking the "Submit" button
  if (isset($_GET['submit'])) {
    // TODO (Part 2): Write code to retrieve the submitted values
    // and display the name of the selected programming language(s) here
    $selected = $_GET["language"];
    foreach($selected as $value){
    ?>
    <li><?=$languages[$value]?></li>
<?php
    }
  }

?>
</ul>
</body>
</html>
