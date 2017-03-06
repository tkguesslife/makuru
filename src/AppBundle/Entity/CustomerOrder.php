<?php


namespace AppBundle\Entity;


class CustomerOrder
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var CurrencyInventory
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CurrencyInventory")
     *  @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_inventory_id",referencedColumnName="id")
     * })
     */
    private $purchasedCurrencyInventory;


    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     *  @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     * })
     */
    private $user;


    /**
     * @var datetime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     * @link https://github.com/stof/StofDoctrineExtensionsBundle
     */
    protected $createdAt;

}