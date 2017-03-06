<?php


namespace AppBundle\Entity;


class CurrencyInventory
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
     * @var Currency
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Currency")
     *  @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id",referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var datetime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     * @link https://github.com/stof/StofDoctrineExtensionsBundle
     */
    protected $createdAt;

}