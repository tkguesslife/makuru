<?php


namespace AppBundle\Services\CustomerOrder;

use AppBundle\Entity\CustomerOrder;
use AppBundle\Services\User\UserManager;
use Doctrine\ORM\EntityManager;
use JMS\DiExtraBundle\Annotation as DI;
use Monolog\Logger;

/**
 * Class CustomerOrderManager
 * @DI\Service("customer.order.manager")
 * @package AppBundle\Services\CustomerOrder
 * @author Tiko Banyini
 */
class CustomerOrderManager
{

    /**
     * @var Monolog logger
     */
    protected $logger;

    /**
     * @var Entity manager
     */
    protected $em;

    /**
     * @var UserManager
     */
    protected $userManager;

    /**
     * UserManager constructor.
     *
     * @param EntityManager $em
     * @param Logger $logger
     *
     * @DI\InjectParams({
     *     "em"                  = @DI\Inject("doctrine.orm.entity_manager"),
     *     "logger"              = @DI\Inject("logger"),
     *     "userManager"              = @DI\Inject("user.manager")
     * })
     * @param Logger $logger
     * @param EntityManager $em
     */
    public function __construct(Logger $logger, EntityManager $em, UserManager $userManager)
    {
        $this->logger = $logger;
        $this->em = $em;
        $this->userManager = $userManager;

    }

    /**
     * @param CustomerOrder $customerOrder
     */
    function createCustomerOrder(CustomerOrder $customerOrder){
        $this->logger->info("customer.order.manager createCustomerOrder()");
        if(!$customerOrder->getOrderBy() && is_object($orderBy = $this->userManager->getCurrentUser())){
            $customerOrder->setOrderBy($orderBy);
        }

        $this->create($customerOrder);
    }

    /**
     * Persist and flush CustomerOrder entity
     * @param CustomerOrder $customerOrder
     * @return CustomerOrder
     */
    function create(CustomerOrder $customerOrder){
        $this->logger->info("customer.order.manager create()");

        $this->em->persist($customerOrder);
        $this->em->flush();
        return $customerOrder;
    }

}