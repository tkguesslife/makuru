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
     * @var RestClient
     */
    protected $restClient;

    /**
     * Site Url
     * @var String
     * @DI\Inject("%site_url%")
     */
    public $siteUrl;

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
        $this->restClient = $restClient;

    }

    public function process(){

        $this->postMember();


    }

    /**
     * @return mixed
     */
    private function postMember(){
        $this->logger->info("customer.order.data.manager postMember()");
        $this->logger->info("URL: ".$this->siteUrl.'/api/customer-order/create.json');
        $responseStr = $this->restClient->post(
            $this->siteUrl.'/api/customer-order/create.json',
            $this->getJsonString()
        )->getContent();
        $this->logger->info($responseStr );

        return json_decode($responseStr);
    }


    /**
     * @return string
     */
    private function getJsonString(){
        $arrData = array(
            'zarAmount' => 5000,
            'foreignCurrency' => "GBP",
        );

        return json_encode($arrData);
    }

}