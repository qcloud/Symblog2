<?php
/**
 * Created by PhpStorm.
 * User: Shibly
 * Date: 9/27/2014
 * Time: 11:00 AM
 */

namespace Blog\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Timestampable abstract class to define created behavior
 * @package Blog\ModelBundle\Entity
 * @ORM\MappedSuperclass
 */
abstract class Timestampable
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * Construct
     */

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Author
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