<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;


/**
 * Class User
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\UserRepository")
 *
 * @ORM\Table(name="USER",
 *      indexes={@ORM\Index(name="search_context", columns={"first_name","last_name"})}
 * )
 *
 * @UniqueEntity(fields={"email"}, groups={"create","edit" ,"save_rest"}, message="Email address is already being used by another user, please try another one."))
 * @ORM\HasLifecycleCallbacks
 *
 * @Gedmo\Loggable
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 *
 * @ExclusionPolicy("all")
 *
 * @package AppBundle\Entity
 * @author Tiko Banyini
 */
class User
{

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Expose
     *
     * @var integer
     */
    protected $id;

    /**
     * @var string
     *
     * @Assert\NotBlank(message = "First name cannot be blank!",groups={"save_rest", "member_create"})
     * @Assert\Length(
     *      min = "2",
     *      max = "100",
     *      minMessage = "First name must have at least {{ limit }} characters",
     *      maxMessage = "First name has a limit of {{ limit }} characters",
     *      groups={"create","edit", "save_rest", "member_create"}
     * )
     * @Assert\Regex(pattern="/\d/",
     *               match=false,
     *               message="First Name cannot contain numeric values",
     *               groups={"create","edit", "save_rest", "member_create"}
     *  )
     *
     * @ORM\Column(name="first_name", type="string", length=50)
     * @Gedmo\Versioned
     * @Expose
     */
    protected $firstName;

    /**
     * @var string
     *
     * @Assert\NotBlank(message = "Last name cannot be blank!", groups={"create","edit", "member_create"})
     * @Assert\Length(
     *      min = "2",
     *      max = "100",
     *      minMessage = "Last name must have at least {{ limit }} characters",
     *      maxMessage = "Last name has a limit of {{ limit }} characters",
     *      groups={"create","edit", "save_rest", "member_create"}
     * )
     * @Assert\Regex(pattern="/\d/",
     *               match=false,
     *               message="Last Name cannot contain numeric values",
     *               groups={"create","edit"}
     *  )
     *
     * @ORM\Column(name="last_name", type="string", length=50)
     * @Gedmo\Versioned
     * @Expose
     */
    protected $lastName;

    /**
     * @var string
     *
     */
    protected $fullName;

}