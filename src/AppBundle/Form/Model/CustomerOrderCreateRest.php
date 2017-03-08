<?php


namespace AppBundle\Form\Model;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CustomerOrderCreateRest
 *
 * @package AppBundle\Form\Model
 * @author Tiko Banyini
 */
class CustomerOrderCreateRest
{

    /**
     * @var float
     */
    private $zarAmount;

    /**
     * @var String
     */
    private $foreignCurrency;

    /**
     * @return mixed
     */
    public function getZarAmount()
    {
        return $this->zarAmount;
    }

    /**
     * @param mixed $zarAmount
     */
    public function setZarAmount($zarAmount)
    {
        $this->zarAmount = $zarAmount;
    }

    /**
     * @return mixed
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * @param mixed $foreignCurrency
     */
    public function setForeignCurrency($foreignCurrency)
    {
        $this->foreignCurrency = $foreignCurrency;
    }




}