<?php


namespace AppBundle\Event\CustomerOrder;


use AppBundle\Entity\CustomerOrder;

/**
 * Class CustomerOrderEvent
 * @package AppBundle\Event\CustomerOrder
 * @author Tiko Banyini
 */
class CustomerOrderEvent
{

    /**
     * @var CustomerOrder
     */
    private $customerOrder;

    /**
     * CustomerOrderEvent constructor.
     * @param CustomerOrder $customerOrder
     */
    public function __construct(CustomerOrder $customerOrder)
    {
        $this->customerOrder = $customerOrder;
    }
}