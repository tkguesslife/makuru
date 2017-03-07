<?php


namespace AppBundle\Services\CustomerOrder;

use AppBundle\Services\User\UserManager;
use Circle\RestClientBundle\Services\RestClient;
use Doctrine\ORM\EntityManager;
use Monolog\Logger;
use JMS\DiExtraBundle\Annotation as DI;
/**
 * Class CustomerOrderDataManager
 *
 * Load customer order by using the API
 *
 * @DI\Service("customer.order.data.manager")
 * @package AppBundle\Services\CustomerOrder
 * @author Tiko Banyini
 */
class CustomerOrderDataManager
{

    /**
     * @var  logger
     */
    protected $logger;

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var UserManager
     */
    protected $userManager;

    /**
     * CustomerOrderDataManager constructor.
     *
     * @param Logger $logger
     * @param EntityManager $em
     * @param UserManager $userManager
     * @DI\InjectParams({
     *     "em"                  = @DI\Inject("doctrine.orm.entity_manager"),
     *     "logger"              = @DI\Inject("logger"),
     *     "userManager"              = @DI\Inject("user.manager"),
     *     "restClient"              = @DI\Inject("circle.restclient")
     * })
     */
    public function __construct(Logger $logger, EntityManager $em, UserManager $userManager, RestClient $restClient)
    {
        $this->logger = $logger;
        $this->em = $em;
        $this->userManager = $userManager;

    }

    public function process(){

    }


    private function getJsonString(){
        $arrData = array(
            'zarAmount' => 5000,
            'foreignCurrency' => "GBP",
            'foreignCurrency' => "GBP",
        );
    }

}