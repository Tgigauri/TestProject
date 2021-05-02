<?php
require_once "Products.php";

class ProductProperties extends Products
{

    //remove product from database
    public function removeProducts($SKU)
    {
        $stm = $this->database->con;
        $rows = $stm->exec("DELETE FROM db_products WHERE SKU='$SKU'");
    }

    
    
    public function __construct(DB $database,$SKU=null,$Name=null,$Price=null,$Size=null,$Weight=null,$Height=null,$Width=null,$Length=null,$Type=null)

    {
        $this->database = $database;
        $this->SKU=$SKU;
        $this->Name=$Name;
        $this->Price=$Price;
        $this->Size=$Size;
        $this->Weight=$Weight;
        $this->Height=$Height;
        $this->Length=$Length;
        $this->Width=$Width;
        $this->Type=$Type;
    }

            
    
     //get selected product data from database
    public function getProducts()
    {
          
          $stm = $this->database->con->query("SELECT SKU,Name,Price,Size,Weight,Height,Width,length,type_fk from db_products");
          $rows = $stm->fetchAll(PDO::FETCH_NUM);
          $count = 0;
      
          foreach($rows as $row) :
          ?>       
          <span class = "products">
              
          <?php
                 switch($row[8])
                 {
                          
                 case 1://DVD    
                     printf("%s <br /> %s <br /> %s$ <br /> Size:%sMB",$row[0],$row[1],$row[2],$row[3]);
                     break;
                 case 2://BOOK
                     printf("%s <br /> %s <br /> %s$ <br /> Weight:%sKG",$row[0],$row[1],$row[2],$row[4]);
                     break;
                 case 3://Furniture
                     printf("%s <br /> %s <br /> %s$ <br /> Dimension:%sx%sx%s",$row[0],$row[1],$row[2],$row[5],$row[6],$row[7]);
                 }
      
          ?> 
          <input type="checkbox" name='product[]' value="<?php echo "$row[0]";?>">
          </span>
    
          <?php endforeach;
          
    }

    //add products to db
    public function addTodb()
    {
    $stm = $this->database->con;
    $rows = $stm->exec("INSERT INTO db_products (SKU, Name, Price, Size , Weight, Height, Width, Length, type_fk)
     VALUES ('$this->SKU', '$this->Name', $this->Price,'$this->Size','$this->Weight','$this->Height','$this->Width','$this->Length','$this->Type')");
    }

}