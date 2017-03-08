<?php


namespace AppBundle\EventListener\CustomerOrder;


use AppBundle\Event\CustomerOrder\CustomerOrderEvent;
use AppBundle\Event\CustomerOrder\CustomerOrderEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EmailOrderDetailsListener implements EventSubscriberInterface
{

    /**
     * Monolog logger.
     *
     * @var Service
     */
    private $logger;

    /**
     * Templating.
     *
     * @var Service
     */
    private $templating;

    /**
     * From email name.
     *
     * @var String
     * @@DI\Inject("%mail.from.name%")
     */
    public $fromName;

    /**
     * From email address.
     *
     * @var String
     * @DI\Inject("%mail.from.email%")
     */
    public $fromEmailAddress;

    /**
     * Site name.
     *
     * @var String
     * @DI\Inject("%site_name%")
     */
    public $siteName;


    /**
     * Get Subscription Events.
     *
     * @return Array
     */
    public static function getSubscribedEvents()
    {
        return array(
            CustomerOrderEvents::EMAIL_ORDER_DETAILS => 'onEmailOrderDetails',
        );
    }

    /**
     * Class construct.
     *
     * @param Logger     $logger
     * @param Mailer     $mailer
     * @param Templating $templating
     *
     * @DI\InjectParams({
     *     "logger"         = @DI\Inject("logger"),
     *     "mailer"         = @DI\Inject("mailer"),
     *     "templating"     = @DI\Inject("templating")
     * })
     */
    public function __construct(
        Logger $logger,
        \Swift_Mailer $mailer,
        $templating
    ) {
        $this->logger = $logger;
        $this->mailer = $mailer;
        $this->templating = $templating;
    }


    public function onEmailOrderDetails(CustomerOrderEvent $customerOrderEvent){
        $this->logger->info('EmailOrderDetailsListener onEmailOrderDetails()');
    }
}