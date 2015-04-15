<?php

namespace Mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * offair
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mmitv\BackBundle\Entity\offairRepository")
 */
class offair
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
     * @ORM\Column(name="video", type="string", length=75)
     */
    private $video;


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
     * Set video
     *
     * @param string $video
     * @return offair
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }
}
