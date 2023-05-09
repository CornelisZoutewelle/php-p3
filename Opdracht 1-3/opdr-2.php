<?php
// Class 'Product' is the class for all the products.
class Product{
    public $name = "Chosen Softdrink";
}

// Softdrinks (Products)
$Softdrink1 = new Product();
$Softdrink1->name = "Coca-Cola";

$Softdrink2 = new Product();
$Softdrink2->name = "Coca-Cola Zero";

$Softdrink3 = new Product();
$Softdrink3->name = "Coca-Cola Light";

$Softdrink4 = new Product();
$Softdrink4->name = "Pepsi";

echo $Softdrink1->name, "<br>";
echo $Softdrink2->name, "<br>";
echo $Softdrink3->name, "<br>";

$Softdrink4->name = "Fanta";
echo $Softdrink4->name;
?>