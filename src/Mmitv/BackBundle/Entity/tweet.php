<?php

namespace Mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tweet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mmitv\BackBundle\Entity\tweetRepository")
 */
class tweet
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
     * @ORM\Column(name="compte_tweet", type="string", length=60)
     */
    private $compteTweet;

    /**
    * @ORM\OneToMany(targetEntity="Mmitv\BackBundle\Entity\membre", mappedBy="membre")
    *
    */
    private $membre_id;


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
     * Constructor
     */
    public function __construct()
    {
        $this->membre_id = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add membre_id
     *
     * @param \Mmitv\BackBundle\Entity\membre $membreId
     * @return tweet
     */
    public function addMembreId(\Mmitv\BackBundle\Entity\membre $membreId)
    {
        $this->membre_id[] = $membreId;

        return $this;
    }

    /**
     * Remove membre_id
     *
     * @param \Mmitv\BackBundle\Entity\membre $membreId
     */
    public function removeMembreId(\Mmitv\BackBundle\Entity\membre $membreId)
    {
        $this->membre_id->removeElement($membreId);
    }

    /**
     * Get membre_id
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembreId()
    {
        return $this->membre_id;
    }
    /**
     * @var integer
     */
    private $membreId;


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
}
