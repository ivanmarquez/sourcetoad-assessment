<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Customer;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Item;

$customer = new Customer("Ivan", "Marquez");
$customer->addAddress(new Address("123 St", "Apt 4B", "Los Angeles", "CA", "90210"));
$customer->addAddress(new Address("456 St", "Apt 5C", "Los Angeles", "CA", "90000"));

$cart = new Cart();
$cart->setCustomer($customer);

$cart->addItem(new Item(1, "Laptop", 1, 999.99));
$cart->addItem(new Item(2, "Mouse", 2, 25.50));

# Output
echo "Customer Name: " . $cart->getCustomerName() . "\n";
echo "Customer Addresses:\n";
foreach ($cart->getCustomerAddresses() as $address) {
    echo "  - " . $address . "\n";
}

echo "Items in Cart:\n";
foreach ($cart->getItems() as $item) {
    echo "  - {$item->name} (Quantity: {$item->quantity}, Price: {$item->price}, Total: {$item->getTotalPrice()})\n";
}

echo "Subtotal: $" . number_format($cart->getSubtotal(), 2) . "\n";
echo "Tax: $" . number_format($cart->getTax(), 2) . "\n";
echo "Shipping: $" . number_format($cart->getShippingCost(), 2) . "\n";
echo "Total: $" . number_format($cart->getTotal(), 2) . "\n";
