<?php require "AddtoDB.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous">
</script>
<script src="../JS/Script.js"></script>
<link rel="stylesheet" href="../CSS/styles.css">
<div class="header">
  <h1>Product Add</h1>
</div> 
<title>Add Product</title>
</head>
<body>
<form action="../index.php">
    <input type="submit" value="Cancel" class="cancel" />
</form>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="mainform" onsubmit="parseForm();">

  <label for="sku">SKU</label>
  <input type="text" id="sku" name="sku" required><br>
  <label for="lname">Name</label>
  <input type="text" id="name" name="name" required><br>
  <label for="price">Price</label>
  <input type="text" id="price" name="price" required><br>

  <div class="product-select" style="width:200px;">
  <select name="product" id="product">
     <option value="0">---Select Product---</option>
     <option value="1">DVD</option>
     <option value="2">Book</option>
     <option value="3">Furniture</option>
  </select> 
  </div>

  <div id="1" class="group">
  <label for="size">Size (MB)</label>
  <input type="text" id="size" name="size" required><br>
  </div>

  <div id="2" class="group">
  <label for="size">Weight (KG)</label>
  <input type="text" id="weight" name="weight" required><br>
  </div>


  <div id="3" class="group">
  <label for="size">Height(CM)</label>
  <input type="text" id="height" name="height" required><br>
  <label for="size">Width(CM)</label>
  <input type="text" id="width" name="width" required><br>
  <label for="size">length(CM)</label>
  <input type="text" id="length" name="length" required><br>
  </div>

  <input type="submit" id="submitproducts" value="Submit" onclick="submitForm()"/>
</form>

</body>

<footer>
  <p>Tornike Gigauri</p>
</footer> 
</html>
