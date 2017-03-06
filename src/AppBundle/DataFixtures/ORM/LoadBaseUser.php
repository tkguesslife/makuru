<?php


namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadBaseUser
 * Load base user data
 * @package AppBundle\DataFixtures\ORM
 * @author Tiko Banyini
 */
class LoadBaseUser extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * @param ObjectManager $objectManager
     */
    function load(ObjectManager $objectManager){

        $user = new User();
        $user->setFirstName("Tiko");
        $user->setLastName("Banyini");
        $objectManager->persist($user);
        $objectManager->flush();

        $this->addReference('user-tiko', $user);
    }

    /**
     * @return int
     */
    function getOrder()
    {
        return 1;
    }
}