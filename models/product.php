<?php

require __DIR__ . '/../database/db.php';

class Products{
    public $id;
    public $name;
    public $price;
    public $category;
    public $poster;

    public function __construct($id, $name, $price, $category, $poster){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->poster = $poster;
    }
}

class Animal extends Products{   
    public $animal;

    public function __construct($id, $name, $price, $category, $poster, $animal){
        parent::__construct($id, $name, $price, $category, $poster);
        $this->animal = $animal;
    }
}


?>