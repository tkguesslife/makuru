<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class CustomerOrder
 * @ORM\Table(name="CUSTOMER_ORDER")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\CustomerOrderRepository")
 *
 * @package AppBundle\Entity
 * @author Tiko Banyini
 */
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
     * @var float
     * @ORM\Column(name="exchange_rate" ,type="decimal", nullable=false, precision=38, scale=2)
     */
    private $exchangeRate;

    /**
     * @var float
     * @ORM\Column(name="surchange" ,type="decimal", nullable=false, precision=38, scale=2)
     */
    private $surchange;

    /**
     * @var float
     * @ORM\Column(name="foreign_amount" ,type="decimal", nullable=false, precision=38, scale=2)
     */
    private $foreignAmount;

    /**
     * @var float
     * @ORM\Column(name="zar_amount" ,type="decimal", nullable=false, precision=38, scale=2)
     */
    private $zarAmount;

    /**
     * @var
     * @ORM\Column(name="discount_percentage" ,type="decimal", nullable=false, precision=38, scale=2)
     */
    private $discountPercentage;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     *  @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_by_id",referencedColumnName="id")
     * })
     */
    private $orderBy;


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
     * Set exchangeRate
     *
     * @param string $exchangeRate
     *
     * @return CustomerOrder
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Set surchange
     *
     * @param string $surchange
     *
     * @return CustomerOrder
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

    /**
     * Set foreignAmount
     *
     * @param string $foreignAmount
     *
     * @return CustomerOrder
     */
    public function setForeignAmount($foreignAmount)
    {
        $this->foreignAmount = $foreignAmount;

        return $this;
    }

    /**
     * Get foreignAmount
     *
     * @return string
     */
    public function getForeignAmount()
    {
        return $this->foreignAmount;
    }

    /**
     * Set zarAmount
     *
     * @param string $zarAmount
     *
     * @return CustomerOrder
     */
    public function setZarAmount($zarAmount)
    {
        $this->zarAmount = $zarAmount;

        return $this;
    }

    /**
     * Get zarAmount
     *
     * @return string
     */
    public function getZarAmount()
    {
        return $this->zarAmount;
    }

    /**
     * Set discountPercentage
     *
     * @param string $discountPercentage
     *
     * @return CustomerOrder
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
     * @return CustomerOrder
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
     * Set purchasedCurrencyInventory
     *
     * @param \AppBundle\Entity\CurrencyInventory $purchasedCurrencyInventory
     *
     * @return CustomerOrder
     */
    public function setPurchasedCurrencyInventory(\AppBundle\Entity\CurrencyInventory $purchasedCurrencyInventory = null)
    {
        $this->purchasedCurrencyInventory = $purchasedCurrencyInventory;

        return $this;
    }

    /**
     * Get purchasedCurrencyInventory
     *
     * @return \AppBundle\Entity\CurrencyInventory
     */
    public function getPurchasedCurrencyInventory()
    {
        return $this->purchasedCurrencyInventory;
    }

    /**
     * Set orderBy
     *
     * @param \AppBundle\Entity\User $orderBy
     *
     * @return CustomerOrder
     */
    public function setOrderBy(\AppBundle\Entity\User $orderBy = null)
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * Get orderBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }
}
