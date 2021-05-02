<?php
require_once "DB.php";



abstract class Products
{

protected $database = null;
protected $SKU;
protected $Name;
protected $Price;
protected $Size;
protected $Weight;
protected $Height;
protected $Width;
protected $Length;
protected $Type;
abstract public function getProducts();
abstract public function addTodb();
abstract public function removeProducts($SKU);
 
}

