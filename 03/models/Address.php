<?php
namespace App\Models;

class Address {
    public $line1;
    public $line2;
    public $city;
    public $state;
    public $zip;

    public function __construct($line1, $line2, $city, $state, $zip) {
        $this->line1 = $line1;
        $this->line2 = $line2;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }

    public function getState() {
        return $this->state;
    }

    public function __toString() {
        return "{$this->line1}, {$this->line2}, {$this->city}, {$this->state}, {$this->zip}";
    }
}
