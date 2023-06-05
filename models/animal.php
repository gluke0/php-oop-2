<?php

class Animal extends Products{   
    public $animal;

    public function __construct($id, $name, $price, $category, $poster, $animal, $availability = 1){
        parent::__construct($id, $name, $price, $category, $poster, $availability);
        $this->animal = $animal;
    }
}

?>