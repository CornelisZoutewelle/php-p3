<?php
// Class 'Product' is the class for all the products.
class Product{
    public $name;
    public $price;
    public $catagory;

    public function setName($name){
        $this->name = ucfirst($name);
    }

    public function setCatagory($catagory){
        $this->catagory = strtoupper($catagory);
    }

    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }
}

// Fruits (Products)
$Fruit1 = new Product();
$Fruit1->setName(name: "apple");
$Fruit1->setCatagory("fruit");

$Fruit1->price = "2";

$Fruit2 = new Product();
$Fruit2->setName(name: "banana");
$Fruit2->setCatagory("fruit");

$Fruit2->price = "2";

$Fruit3 = new Product();
$Fruit3->setName(name: "kiwi");
$Fruit3->setCatagory("fruit");

$Fruit3->price = "2.49";

$Fruit4 = new Product();
$Fruit4->setName(name: "melon");
$Fruit4->setCatagory("fruit");

$Fruit4->price = "2.39";

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