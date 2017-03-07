<?php


namespace AppBundle\Handler\CurrencyInventory;


use Doctrine\ORM\EntityManager;
use JMS\DiExtraBundle\Annotation as DI;
use Monolog\Logger;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class InventoryListHandler
 *
 * Handles CurrencyInventory
 *
 * @DI\Service("currency_inventory.list_handler")
 *
 * @package AppBundle\Handler\CurrencyInventory
 * @author Tiko Banyini
 */
class InventoryListHandler
{

    /**
     * @var Logger
     */
    private $logger;

    /**
     * @var EntityManager
     */
    private $entityManager;


    /**
     * InventoryListHandler constructor.
     *
     * @DI\InjectParams({
     * "logger" = @DI\Inject("logger"),
     * "entityManager" = @DI\Inject("doctrine.orm.entity_manager")
     * })
     *
     * @param Logger $logger
     * @param EntityManager $entityManager
     */
    public function __construct(Logger $logger, EntityManager $entityManager)
    {
        $this->logger = $logger;
        $this->entityManager = $entityManager;
    }


    /**
     * @param Request $request
     * @return array
     */
    public function handle(Request $request)
    {
        $this->logger->info("currency_inventory.list_handler handle()");
        $currencyInventories = $this->entityManager->getRepository("AppBundle:CurrencyInventory")->findAll();
        return $currencyInventories;

    }

}