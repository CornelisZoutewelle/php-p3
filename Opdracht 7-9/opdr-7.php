<?php
    class Product
    {

        public function __construct(public $price, public $name = "een muzieksoort", public $currency = "&euro")
        {
            $this->name = ucfirst($name);
            $this->price = $price;
            $this->currency = $currency;
        }

        public function formatPrice()
        {
            return number_format($this->price, decimals:2);
        }
    }

    $muzieksoort1 = new Product(price:40, currency:"€", name:"muzieksoort 1");
    
    var_dump($muzieksoort1);
?>