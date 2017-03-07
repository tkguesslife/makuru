<?php


namespace AppBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CustomerOrderCommand
 *
 * @package AppBundle\Command
 * @author Tiko Banyini
 */
class CustomerOrderCommand extends ContainerAwareCommand
{


    protected function configure()
    {
        $this
            ->setName('makuru:customer-order:load')
            ->setDescription('Import customer order data')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info>::::::::::::::::::Start customer order data load</info>");
        $customerOrderDataManager = $this->getContainer()->get('customer.order.data.manager');
        $customerOrderDataManager->process();

        $output->writeln("<info>::::::::::::::::::End customer order data load</info>");

    }

}