<?php

namespace Mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * videos
 */
class videos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $lienVideos;

    /**
     * @var string
     */
    private $nomVideos;

    /**
     * @var string
     */
    private $plateformeVideos;

    /**
     * @var \DateTime
     */
    private $dureeVideos;

    /**
     * @var \DateTime
     */
    private $debutVideos;

    /**
     * @var \DateTime
     */
    private $finVideos;

    /**
     *@ORM\ManyToMany(targetEntity="Mmitv\BackBundle\Entity\membre")
     */
    private $playlistId;


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
     * Set plateformeVideos
     *
     * @param string $plateformeVideos
     * @return videos
     */
    public function setPlateformeVideos($plateformeVideos)
    {
        $this->plateformeVideos = $plateformeVideos;

        return $this;
    }

    /**
     * Get plateformeVideos
     *
     * @return string 
     */
    public function getPlateformeVideos()
    {
        return $this->plateformeVideos;
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

    /**
     * Set playlistId
     *
     * @param integer $playlistId
     * @return videos
     */
    public function setPlaylistId($playlistId)
    {
        $this->playlistId = $playlistId;

        return $this;
    }

    /**
     * Get playlistId
     *
     * @return integer 
     */
    public function getPlaylistId()
    {
        return $this->playlistId;
    }
}
