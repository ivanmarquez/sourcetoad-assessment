<?php
namespace App\Models;

class Customer {
    public $firstName;
    public $lastName;
    private $addresses = [];

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function addAddress($address) {
        $this->addresses[] = $address;
    }

    public function getAddresses() {
        return $this->addresses;
    }

    public function getFullName() {
        return "{$this->firstName} {$this->lastName}";
    }
}
