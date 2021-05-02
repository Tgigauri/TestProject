<?php

require "FormValidator.php";
require_once "DB.php";
require_once "ProductProperties.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $validate = new FormValidator();
    foreach ($_POST as $key => $value)
    {
        
        if(!$validate->isvalid($value)||$validate->isempty($value)|| $validate->Containsletters($_POST["price"]))
        {
            
            $validate->valid=FALSE;
            $validate->alert('Select Product And Fill All The Required Fields With Correct Type!');
            echo $value;
            break;
        }
        if($key=='product')
        {
            break;
        }
    }

  $dbtest = new DB();
  $data = new ProductProperties($dbtest,$_POST["sku"],$_POST["name"],$_POST["price"],$_POST["size"],$_POST["weight"],$_POST["height"],$_POST["width"],$_POST["length"],$_POST["product"]);
  $data->addTodb();
  
}
?>

