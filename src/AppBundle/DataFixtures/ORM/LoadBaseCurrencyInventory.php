<?php


namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\CurrencyInventory;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


/**
 * Class LoadBaseCurrencyInventory
 * Load base currency inventories available for purchase
 *
 * @package AppBundle\DataFixtures\ORM
 * @author Tiko Banyini
 */
class LoadBaseCurrencyInventory extends AbstractFixture  implements OrderedFixtureInterface
{

    /**
     * @param ObjectManager $objectManager
     */
    function load(ObjectManager $objectManager){

        $usdInventory = new CurrencyInventory();
        $usdInventory->setCurrency($this->getReference('currency-usd'));
        $usdInventory->setSurchange(7.5);
        $objectManager->persist($usdInventory);

        $gbpInventory = new CurrencyInventory();
        $gbpInventory->setCurrency($this->getReference('currency-gbp'));
        $gbpInventory->setSurchange(5);
        $objectManager->persist($gbpInventory);

        $eurInventory = new CurrencyInventory();
        $eurInventory->setCurrency($this->getReference('currency-eur'));
        $eurInventory->setDiscountPercentage(2);
        $eurInventory->setSurchange(5);
        $objectManager->persist($eurInventory);

        $kesInventory = new CurrencyInventory();
        $kesInventory->setCurrency($this->getReference('currency-kes'));
        $kesInventory->setSurchange(2.5);
        $objectManager->persist($kesInventory);

        $objectManager->flush();
    }

    function getOrder()
    {
        return 10;
    }

}