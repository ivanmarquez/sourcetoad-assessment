<?php
namespace App\Models;

use App\Services\ShippingService;

class Cart {
    private $customer;
    private $items = [];
    private $taxRate = 0.07;

    public function setCustomer($customer) {
        $this->customer = $customer;
    }

    public function getCustomerName() {
        return $this->customer ? $this->customer->getFullName() : null;
    }

    public function getCustomerAddresses() {
        return $this->customer ? $this->customer->getAddresses() : [];
    }

    public function getOrderShippingAddress() {
        $addresses = $this->customer->getAddresses();
        return !empty($addresses) ? $addresses[0] : null;
    }

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function getItems() {
        return $this->items;
    }

    public function getSubtotal() {
        $subtotal = 0;
        foreach ($this->items as $item) {
            $subtotal += $item->getTotalPrice();
        }
        return $subtotal;
    }

    public function getTax() {
        return $this->getSubtotal() * $this->taxRate;
    }

    public function getShippingCost() {
        return ShippingService::getShippingRate($this->customer->getAddresses()[0]);
    }

    public function getTotal() {
        return $this->getSubtotal() + $this->getTax() + $this->getShippingCost();
    }
}
