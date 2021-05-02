<?php
include "PHP/MassDelete.php";
require_once "PHP/DB.php";
require_once "PHP/ProductProperties.php";
$dbtest = new DB();
$dbtest->check_con();
$product = new ProductProperties($dbtest);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="CSS/index.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    </div>
</head>
<body>

<header class="header">
    <h1>Product List</h1>
</header>
<form action="PHP/NewProduct.php">
    <input type="submit" value="Add" id = "Add">
</form>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    
    <input id= "MassDelete" type="submit" value="Mass Delete" name = "submit" >
    
<?php 
$product->getProducts();
?>
</form> 

</body>
<footer>
  <p>Tornike Gigauri</p>
</footer> 
</html>

