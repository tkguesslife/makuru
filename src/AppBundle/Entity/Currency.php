<?php


namespace AppBundle\Entity;

/**
 * Class Currency
 *
 * * @ORM\Table(name="CURRENCY")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\LanguageRepository")
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

}