<?php

namespace Mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * videos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mmitv\BackBundle\Entity\videosRepository")
 */
class videos
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
     * @ORM\Column(name="lienVideos", type="string", length=40)
     */
    private $lienVideos;

    /**
     * @var string
     *
     * @ORM\Column(name="nomVideos", type="string", length=40)
     */
    private $nomVideos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dureeVideos", type="time")
     */
    private $dureeVideos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debutVideos", type="time")
     */
    private $debutVideos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finVideos", type="time")
     */
    private $finVideos;



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
     * Set lienVideos
     *
     * @param string $lienVideos
     * @return videos
     */
    public function setLienVideos($lienVideos)
    {
        $this->lienVideos = $lienVideos;

        return $this;
    }

    /**
     * Get lienVideos
     *
     * @return string 
     */
    public function getLienVideos()
    {
        return $this->lienVideos;
    }

    /**
     * Set nomVideos
     *
     * @param string $nomVideos
     * @return videos
     */
    public function setNomVideos($nomVideos)
    {
        $this->nomVideos = $nomVideos;

        return $this;
    }

    /**
     * Get nomVideos
     *
     * @return string 
     */
    public function getNomVideos()
    {
        return $this->nomVideos;
    }

    /**
     * Set dureeVideos
     *
     * @param \DateTime $dureeVideos
     * @return videos
     */
    public function setDureeVideos($dureeVideos)
    {
        $this->dureeVideos = $dureeVideos;

        return $this;
    }

    /**
     * Get dureeVideos
     *
     * @return \DateTime 
     */
    public function getDureeVideos()
    {
        return $this->dureeVideos;
    }

    /**
     * Set debutVideos
     *
     * @param \DateTime $debutVideos
     * @return videos
     */
    public function setDebutVideos($debutVideos)
    {
        $this->debutVideos = $debutVideos;

        return $this;
    }

    /**
     * Get debutVideos
     *
     * @return \DateTime 
     */
    public function getDebutVideos()
    {
        return $this->debutVideos;
    }

    /**
     * Set finVideos
     *
     * @param \DateTime $finVideos
     * @return videos
     */
    public function setFinVideos($finVideos)
    {
        $this->finVideos = $finVideos;

        return $this;
    }

    /**
     * Get finVideos
     *
     * @return \DateTime 
     */
    public function getFinVideos()
    {
        return $this->finVideos;
    }
}
