<?php
require_once "ProductProperties.php";
require_once "FormValidator.php";

if(isset($_POST['submit'])){
if(!isset($_POST['product']))
{
    $valid = new FormValidator();
    $valid->valid=false;
    $valid->alert("Select At Least 1 Product!");
}
else{
        $dbtest = new DB();
        $product = new ProductProperties($dbtest);
    foreach($_POST['product'] as $value)
        {
            $product->removeProducts($value);

        }
        
    }

}

?>


