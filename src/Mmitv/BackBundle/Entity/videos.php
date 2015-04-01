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
     * @ORM\Column(name="lien_videos", type="string", length=100)
     */
    private $lienVideos;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_videos", type="string", length=40)
     */
    private $nomVideos;

    /**
     * @var string
     *
     * @ORM\Column(name="plateforme_videos", type="string", length=25)
     */
    private $plateformeVideos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree_videos", type="time")
     */
    private $dureeVideos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_videos", type="time")
     */
    private $debutVideos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_videos", type="time")
     */
    private $finVideos;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Mmitv\BackBundle\Entity\membre" )
     */
    private $playlist_id;


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
     * Constructor
     */
    public function __construct()
    {
        $this->playlist_id = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add playlist_id
     *
     * @param \Mmitv\BackBundle\Entity\membre $playlistId
     * @return videos
     */
    public function addPlaylistId(\Mmitv\BackBundle\Entity\membre $playlistId)
    {
        $this->playlist_id[] = $playlistId;

        return $this;
    }

    /**
     * Remove playlist_id
     *
     * @param \Mmitv\BackBundle\Entity\membre $playlistId
     */
    public function removePlaylistId(\Mmitv\BackBundle\Entity\membre $playlistId)
    {
        $this->playlist_id->removeElement($playlistId);
    }

    /**
     * Get playlist_id
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlaylistId()
    {
        return $this->playlist_id;
    }
    /**
     * @var integer
     */
    private $playlistId;


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
}
