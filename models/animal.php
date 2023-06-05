<?php

trait pet{
    public function isDomestic(){
        echo "PET";
    }
};

class Animal extends Products{   
    use pet;

    public $animal;

    public function __construct($id, $name, $price, $category, $poster, $animal, $availability = 1){
        parent::__construct($id, $name, $price, $category, $poster, $availability);
        $this->animal = $animal;
    }
};

?>