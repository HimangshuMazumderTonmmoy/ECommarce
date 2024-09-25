<?php
require_once('/opt/lampp/htdocs/eCommarce/Model/dataBaseConnection.php');
class product
{
    public $model;
    public $product;
    public $type;
    public $brand;
    public $price;
    public $saller;
    public $quantity;
    public $sold;

    public function __construct( $model = '', $product = '', $type = '', $brand = '', $price = 0.0, $saller = '', $quantity = 0, $sold = 0)
    {
        $this->model = $model;
        $this->product = $product;
        $this->type = $type;
        $this->brand = $brand;
        $this->price = $price;
        $this->saller = $saller;
        $this->quantity = $quantity;
        $this->sold = $sold;
    }

    public function display ()
    {
        echo "Model: " . $this->model . "<br>Product: " . $this->product . "<br> Type: " . $this->type . "<br> Brand: " . $this->brand . "<br> Price: " . $this->price . "<br> Saller: " . $this->saller . "<br> Quantity: " . $this->quantity . "<br> Sold: " . $this->sold . "<br>";
    }

    public function retriveProduct ()
    {
        $connection = getConnection();
        $query = "SELECT * FROM `Product`;";
        $result = mysqli_query($connection, $query);
        $size = mysqli_num_rows($result);
        $product = []; 
        if ($size > 0)
        {
            for ($i = 0; $i < $size; $i++)
            {
                $row = mysqli_fetch_assoc($result);
                $product[$i] = new product($row['Model'], $row['Product'], $row['Type'], $row['Brand'], $row['Price'], $row['SallerID'], $row['Quantity'], $row['Sold']);
            }
        }
        return $product;
    }
    
}
?>