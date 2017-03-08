<?php


namespace AppBundle\Handler\CustomerOrder;


use Doctrine\ORM\EntityManager;
use Monolog\Logger;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * Class CustomerOrderCreateHandler
 *
 * @DI\Service("customer_order.create_handler")
 *
 * @package AppBundle\Handler\CustomerOrder
 * @author Tiko Banyini
 */
class CustomerOrderCreateHandler
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
     * CustomerOrderCreateHandler constructor.
     *
     * @DI\InjectParams({
     * "logger" = @DI\Inject("logger"),
     * "entityManager" = @DI\Inject("doctrine.orm.entity_manager"),
     *
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
     * @param FormInterface $form
     * @return bool
     */
    public function handle(Request $request, FormInterface $form){

        $form->handleRequest($request);
        if($form->isValid()){




            return true;
        }

        return false;
    }

}