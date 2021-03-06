<?php

namespace PlentymarketsAdapter\RequestGenerator\Order\Address;

use PlentyConnector\Connector\TransferObject\Order\Address\Address;
use PlentyConnector\Connector\TransferObject\Order\Order;

/**
 * Interface AddressRequestGeneratorInterface
 */
interface AddressRequestGeneratorInterface
{
    /**
     * @param Address $address
     * @param Order   $order
     * @param int     $addressType
     *
     * @return array
     */
    public function generate(Address $address, Order $order, $addressType = 0);
}
