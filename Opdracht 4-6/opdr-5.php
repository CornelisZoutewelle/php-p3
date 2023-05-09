<?php
// Class 'Product' is the class for all the products.
class Product{
    public $name;
    public $price;
    public $catagory;

    public function __construct($name, $price){
        $this->name = ucfirst($name);
        $this->price = $price;
    }

    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }

    public function setCatagory($catagory){
        $this->catagory = strtoupper($catagory);
    }
}

// Fruits (Products)
$Fruit1 = new Product("apple", 2);
$Fruit1->setCatagory("fruit");

$Fruit2 = new Product("banana", 2);
$Fruit2->setCatagory("fruit");;

$Fruit3 = new Product("kiwi", 2.49);
$Fruit3->setCatagory("fruit");

$Fruit4 = new Product("melon", 2.39);
$Fruit4->setCatagory("fruit");

echo $Fruit1->formatPrice(), "<br>";
echo $Fruit1->name, "<br>";
echo $Fruit1->catagory, "<br>", "<br>";

echo $Fruit2->formatPrice(), "<br>";
echo $Fruit2->name, "<br>";
echo $Fruit2->catagory, "<br>", "<br>";

echo $Fruit3->formatPrice(), "<br>";
echo $Fruit3->name, "<br>";
echo $Fruit3->catagory, "<br>", "<br>";

echo $Fruit4->formatPrice(), "<br>";
echo $Fruit4->name, "<br>";
echo $Fruit4->catagory, "<br>", "<br>";
?>