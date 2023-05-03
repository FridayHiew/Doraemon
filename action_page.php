<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  
   
   Variable 1 - C1:<input type="text" name="aa" value="0.5798"><br><br>
   Variable 2 - C2:<input type="number" name="bb" value="0.4202"><br><br>
   Variable 3 - C25:<input type="number" name="cc"  value="0.0000"><br><br>
   Variable 4 - E2:<input type="number" name="dd"  value="0.0000"><br><br>

  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['aa'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $aa;
  }
}
?>

</body>
</html>