<?php


namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Currency;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadBaseCurrencies
 *
 * Load base data for currencies
 *
 * @package AppBundle\DataFixtures\ORM
 * @author Tiko Banyini
 */
class LoadBaseCurrencies extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * @param ObjectManager $objectManager
     */
    function load(ObjectManager $objectManager)
    {

        $zar = new Currency("SA Rand", "ZAR");
        $objectManager->persist($zar);

        $usd = new Currency("US Dollar", "USD");
        $objectManager->persist($usd);

        $gbp = new Currency("British Pound", "GBP");
        $objectManager->persist($gbp);

        $eur = new Currency("Euro", "EUR");
        $objectManager->persist($eur);

        $kes = new Currency("Kenyan Shilling", "KES");
        $objectManager->persist($kes);

        $objectManager->flush();

        $this->addReference("currency-zar", $zar);
        $this->addReference("currency-usd", $usd);
        $this->addReference("currency-gbp", $gbp);
        $this->addReference("currency-eur", $eur);
        $this->addReference("currency-kes", $kes);


    }

    /**
     * @return int
     */
    function getOrder()
    {
        return 1;
    }

}