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
    new Animal(1, 'Palla', 15, 'Games', 'https://images.unsplash.com/photo-1598628461950-268968751a2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2832&q=80', 'Cane'),

    new Animal(2, 'Biscotti', 5, 'Food', 'https://images.unsplash.com/photo-1568640347023-a616a30bc3bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2946&q=80', 'Cane'),

    new Animal(3, 'Guinzaglio', 30, 'Object', 'https://images.unsplash.com/photo-1574850715183-730d97e1d99c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3087&q=80', 'Cane'),

    new Animal(4, 'Scatoletta', 15, 'Food', 'https://images.unsplash.com/photo-1674943192336-9fdb8aa6b2ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2067&q=80', 'Gatto'),

    new Animal(5, 'Topolino', 20, 'Games', 'https://images.unsplash.com/photo-1515073883629-5e2924e3e106?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', 'Cat'),

    new Animal(6, 'Croccantini', 40, 'Food', 'https://images.unsplash.com/photo-1589924691995-400dc9ecc119?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80', 'Cane'),

    new Animal(7, 'Sabbia', 10, 'Object', 'https://images.unsplash.com/photo-1548759806-821febf1275c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2448&q=80', 'Gatto'),

    new Animal(8, 'Cuccia', 50, 'Object', 'https://images.unsplash.com/photo-1517451330947-7809dead78d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', 'Gatto'),
];

?>