<?php

namespace Mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tweet
 */
class tweet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $compteTweet;

    /**
     * @ORM\OneToMany(targetEntity="Mmitv\BackBundle\Entity\membre")
     */
    private $membreId;


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
     * Set compteTweet
     *
     * @param string $compteTweet
     * @return tweet
     */
    public function setCompteTweet($compteTweet)
    {
        $this->compteTweet = $compteTweet;

        return $this;
    }

    /**
     * Get compteTweet
     *
     * @return string 
     */
    public function getCompteTweet()
    {
        return $this->compteTweet;
    }

    /**
     * Set membreId
     *
     * @param integer $membreId
     * @return tweet
     */
    public function setMembreId($membreId)
    {
        $this->membreId = $membreId;

        return $this;
    }

    /**
     * Get membreId
     *
     * @return integer 
     */
    public function getMembreId()
    {
        return $this->membreId;
    }
}
