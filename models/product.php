<?php

class Products{
    public $id;
    public $name;
    public $price;
    public $genre;
    public $poster;

    public function __construct($id, $name, $price, $genre, $poster){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->genre = $genre;
        $this->poster = $poster;
    }
}

class Animal extends Products{   
    public $animal;
    public $icon;

    public function __construct($id, $name, $price, $genre, $poster, $animal, $icon){
        parent::__construct($id, $name, $price, $genre, $poster);
        $this->animal = $animal;
        $this->icon = $icon;
    }
}

$products = [
    new Animal(1, 'Palla', 15, 'Games', '', 'Cane'),
    new Animal(2, 'Biscotti', 5, 'Food', '', 'Cane'),
    new Animal(3, 'Guinzaglio', 30, 'Object', '', 'Cane'),
    new Animal(4, 'Scatoletta', 15, 'Food', '', 'Gatto'),
    new Animal(5, 'Topolino', 20, 'Games', '', 'Cat'),
    new Animal(6, 'Croccantini', 40, 'Food', '', 'Cane'),
    new Animal(7, 'Sabbia', 10, 'Object', '', 'Gatto'),
    new Animal(8, 'Scarpe', 50, 'Object', '', 'Gatto'),
];

?>