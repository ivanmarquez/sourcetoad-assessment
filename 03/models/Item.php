<?php
namespace App\Models;

class Item {
    public $id;
    public $name;
    public $quantity;
    public $price;

    public function __construct($id, $name, $quantity, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getTotalPrice() {
        return $this->quantity * $this->price;
    }
}
