<?php
namespace App\Services;

class ShippingService {
    public static function getShippingRate($address) {
        $state = $address->getState();

        switch ($state) {
            case 'CA':
                return 10.00;
            case 'NY':
                return 15.00;
            default:
                return 20.00;
        }
    }
}
