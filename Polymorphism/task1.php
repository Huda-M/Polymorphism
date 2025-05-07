<?php 
class Product
{
    private $name;
    public $price;
    public $brand;
    public $image;
    public $description;
    public $tax;

    public function __construct($name, $price, $brand, $image, $description, $tax)
    {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->image = $image;
        $this->description = $description;
        $this->tax = $tax;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function Price_after_discound(float $discound)
    {
        if ($discound > 0 && $discound < 1) {
            return $this->price * (1 - $discound);
        } else {
            return $this->price;
        }
    }

    public function Get_finall_price($discound = 0)
    {
        $price_after_discount = $this->Price_after_discound($discound);

        if ($this->tax > 0) {
            return $price_after_discount + ($price_after_discount * $this->tax);
        } else {
            return $price_after_discount;
        }
    }
}
$product=new product( "phone",5000,"samsung","../images/image1.png","first product",.1);
echo $product->get_name();
echo "<br>";
echo $product->Price_after_discound(.1);
echo "<br>";
echo $product->Get_finall_price();
echo "<br><br>";
$product=new product( "lab",50000,"samsung","../images/image2.png","secound product",.5);
echo $product->get_name();
echo "<br>";
echo $product->Price_after_discound(.3);
echo "<br>";
echo $product->Get_finall_price();
echo "<br><br>";
$product=new product( "tab",15000,"samsung","../images/image3.png","secound product",.3);
echo $product->get_name();
echo "<br>";
echo $product->Price_after_discound(.2);
echo "<br>";
echo $product->Get_finall_price();
echo "<br><br>";