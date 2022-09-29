<?php
    class product {
        // property product
        private $name = "Bakso <br/>";
        public $price;
        public $discount;

        // method product
        function getName() {

        }

        function setName() {
            return "Nama Produk : " .$this->name;
        }

        function getPrice() {

        }

        function setPrice() {
            return "5000<br/>";
        }

        function getDiscount() {

        }

        function setDiscount() {
            return "Buy 1 get 1 <br/><br>";
        }
    }

    // instansiasi class product
    $product = new product();

    //memanggil method setName dari class product
    echo $product->setName();

    //memanggil method setPrice dari class product
    echo $product->setPrice();

    // memanggil method setDiscount dari class product
    echo $product->setDiscount();
?>