<?php
// Class 'Product' is the class for all the products.
class Product{
    public $name;
    public $price;

    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }
}

// Softdrinks (Products)
$Softdrink1 = new Product();
$Softdrink1->name = "Coca-Cola";
$Softdrink1->price = "2";

$Softdrink2 = new Product();
$Softdrink2->name = "Coca-Cola Zero";
$Softdrink2->price = "2";

$Softdrink3 = new Product();
$Softdrink3->name = "Coca-Cola Light";
$Softdrink3->price = "2.49";

$Softdrink4 = new Product();
$Softdrink4->name = "Pepsi";
$Softdrink4->price = "2.39";

echo $Softdrink1->formatPrice(), "<br>";
echo $Softdrink1->name, "<br>", "<br>";

echo $Softdrink2->formatPrice(), "<br>";
echo $Softdrink2->name, "<br>", "<br>";

echo $Softdrink3->formatPrice(), "<br>";
echo $Softdrink3->name, "<br>", "<br>";

echo $Softdrink4->formatPrice(), "<br>";
echo $Softdrink4->name, "<br>", "<br>";
?>