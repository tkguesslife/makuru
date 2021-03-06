<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class Currency
 *
 * @ORM\Table(name="CURRENCY")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\CurrencyRepository")
 *
 * @package AppBundle\Entity
 * @author Tiko Banyini
 */
class Currency
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
     * @var string
     *
     * @ORM\Column(name="currency_name", type="string", length=30)
     */
    private $currencyName;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=30)
     */
    private $currencyCode;

    /**
     * @var datetime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     * @link https://github.com/stof/StofDoctrineExtensionsBundle
     */
    protected $createdAt;

    /**
     * Currency constructor.
     * @param $currencyName
     * @param $currencyCode
     */
    public function __construct($currencyName, $currencyCode)
    {
        $this->currencyName = $currencyName;
        $this->currencyCode = $currencyCode;
    }


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
     * Set currencyName
     *
     * @param string $currencyName
     *
     * @return Currency
     */
    public function setCurrencyName($currencyName)
    {
        $this->currencyName = $currencyName;

        return $this;
    }

    /**
     * Get currencyName
     *
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * Set currencyCode
     *
     * @param string $currencyCode
     *
     * @return Currency
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Currency
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
}
