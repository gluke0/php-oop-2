<?php

require __DIR__ . '/animal.php';
require __DIR__ . '/../database/db.php';

class Products{
    public $id;
    public $name;
    public $price;
    public $category;
    public $poster;
    public $availability;

    public function __construct($id, $name, $price, $category, $poster, $availability = 1){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->poster = $poster;
        $this->availability = $availability;
    }
}

?>