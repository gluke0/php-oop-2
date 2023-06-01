<?php

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
    public $icon;

    public function __construct($id, $name, $price, $category, $poster, $animal, $icon){
        parent::__construct($id, $name, $price, $category, $poster);
        $this->animal = $animal;
        $this->icon = $icon;
    }
}

$products = [
    new Animal(1, 'Palla', 15, 'Games', 'https://images.unsplash.com/photo-1608743839000-50a0aa35e979?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80', 'Cane', 'Icon'),

    new Animal(2, 'Biscotti', 5, 'Food', 'https://images.unsplash.com/photo-1568640347023-a616a30bc3bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2946&q=80', 'Cane', 'Icon'),

    new Animal(3, 'Guinzaglio', 30, 'Object', 'https://images.unsplash.com/photo-1608743912686-fdfc18aeacb8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', 'Cane', 'Icon'),

    new Animal(4, 'Scatoletta', 15, 'Food', 'https://images.unsplash.com/photo-1674943192336-9fdb8aa6b2ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2067&q=80', 'Gatto', 'Icon'),

    new Animal(5, 'Topolino', 20, 'Games', 'https://images.unsplash.com/photo-1515073883629-5e2924e3e106?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', 'Cat', 'Icon'),

    new Animal(6, 'Croccantini', 40, 'Food', 'https://images.unsplash.com/photo-1589924691995-400dc9ecc119?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80', 'Cane', 'Icon'),

    new Animal(7, 'Sabbia', 10, 'Object', 'https://images.unsplash.com/photo-1543604502-9baac28067ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80', 'Gatto', 'Icon'),

    new Animal(8, 'Cuccia', 50, 'Object', 'https://images.unsplash.com/photo-1517451330947-7809dead78d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', 'Gatto', 'Icon'),
];

?>