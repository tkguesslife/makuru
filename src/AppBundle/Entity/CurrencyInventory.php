<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class CurrencyInventory
 *
 * @ORM\Table(name="CURRENCY_INVENTORY")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\CurrencyInventoryRepository")
 *
 * @package AppBundle\Entity
 * @author Tiko Banyini
 */
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
     * @var float
     * @ORM\Column(name="surchange" ,type="decimal", nullable=false, precision=38, scale=2)
     */
    private $surchange;

    /**
     * @var float
     * @ORM\Column(name="discount_percentage" ,type="decimal", nullable=true, precision=38, scale=2)
     */
    private $discountPercentage;

    /**
     * @var datetime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     * @link https://github.com/stof/StofDoctrineExtensionsBundle
     */
    protected $createdAt;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set discountPercentage
     *
     * @param string $discountPercentage
     *
     * @return CurrencyInventory
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Get discountPercentage
     *
     * @return string
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CurrencyInventory
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set currency
     *
     * @param \AppBundle\Entity\Currency $currency
     *
     * @return CurrencyInventory
     */
    public function setCurrency(\AppBundle\Entity\Currency $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return \AppBundle\Entity\Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set surchange
     *
     * @param string $surchange
     *
     * @return CurrencyInventory
     */
    public function setSurchange($surchange)
    {
        $this->surchange = $surchange;

        return $this;
    }

    /**
     * Get surchange
     *
     * @return string
     */
    public function getSurchange()
    {
        return $this->surchange;
    }
}
