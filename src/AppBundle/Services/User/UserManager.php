<?php


namespace AppBundle\Services\User;

use Doctrine\ORM\EntityManager;
use Monolog\Logger;


/**
 * Class UserManager
 * @DI\Service("user.manager")
 *
 * @package AppBundle\Services\User
 * @author Tiko Banyini
 */
class UserManager
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
     * UserManager constructor.
     *
     * @param EntityManager $em
     * @param Logger $logger
     *
     * @DI\InjectParams({
     *     "em"                  = @DI\Inject("doctrine.orm.entity_manager"),
     *     "logger"              = @DI\Inject("logger")
     * })
     * @param Logger $logger
     * @param EntityManager $em
     */
    public function __construct(Logger $logger, EntityManager $em)
    {
        $this->logger = $logger;
        $this->em = $em;

    }

    public function getCurrentUser()
    {
        $this->logger->info("user.manager getCurrentUser()");
        $user = $this->em->getRepository("AppBundle:User")->findByFirstname("Tiko");

        return $user;
    }

}