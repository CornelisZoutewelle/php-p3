<?php
// Class 'Product' is the class for all the products.
class Product{
    public $name;
    public $price;
    public $catagory;
    public $currency;

    public function __construct($name, $price, $currency = "&euro"){
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }

    public function setCatagory($catagory){
        $this->catagory = strtoupper($catagory);
    }
}

// Fruits (Products)
$Fruit1 = new Product(name: "apple", price: 2, currency: "$");
$Fruit1->setCatagory("fruit");

$Fruit2 = new Product(name: "banana", price: 2, currency: "$");
$Fruit2->setCatagory("fruit");;

$Fruit3 = new Product(name: "kiwi", price: 2.49, currency: "$");
$Fruit3->setCatagory("fruit");

$Fruit4 = new Product(name: "melon", price: 2.39, currency: "$");
$Fruit4->setCatagory("fruit");

// Display fruits on screen.
echo $Fruit1->name, "<br>";
echo $Fruit1->catagory,  "<br>";
echo $Fruit1->currency;
echo $Fruit1->formatPrice(),  "<br>", "<br>";

//echo $Fruit2->name, "<br>";
//echo $Fruit2->catagory, "<br>";
//echo $Fruit2->currency;
//echo $Fruit2->formatPrice(), "<br>", "<br>";

echo $Fruit3->name, "<br>";
echo $Fruit3->catagory, "<br>";
echo $Fruit3->currency;
echo $Fruit3->formatPrice(),  "<br>", "<br>";

echo $Fruit4->name, "<br>";
echo $Fruit4->catagory, "<br>";
echo $Fruit4->currency;
echo $Fruit4->formatPrice(), "<br>", "<br>";
?>