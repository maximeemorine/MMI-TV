<?php

namespace Mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * membre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mmitv\BackBundle\Entity\membreRepository")
 */
class membre
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
     * @ORM\Column(name="nom_membre", type="string", length=50)
     */
    private $nomMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_membre", type="string", length=25)
     */
    private $prenomMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="email_membre", type="string", length=55)
     */
    private $emailMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_membre", type="string", length=55)
     */
    private $statutMembre;


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
     * Set nomMembre
     *
     * @param string $nomMembre
     * @return membre
     */
    public function setNomMembre($nomMembre)
    {
        $this->nomMembre = $nomMembre;

        return $this;
    }

    /**
     * Get nomMembre
     *
     * @return string 
     */
    public function getNomMembre()
    {
        return $this->nomMembre;
    }

    /**
     * Set prenomMembre
     *
     * @param string $prenomMembre
     * @return membre
     */
    public function setPrenomMembre($prenomMembre)
    {
        $this->prenomMembre = $prenomMembre;

        return $this;
    }

    /**
     * Get prenomMembre
     *
     * @return string 
     */
    public function getPrenomMembre()
    {
        return $this->prenomMembre;
    }

    /**
     * Set emailMembre
     *
     * @param string $emailMembre
     * @return membre
     */
    public function setEmailMembre($emailMembre)
    {
        $this->emailMembre = $emailMembre;

        return $this;
    }

    /**
     * Get emailMembre
     *
     * @return string 
     */
    public function getEmailMembre()
    {
        return $this->emailMembre;
    }

    /**
     * Set statutMembre
     *
     * @param string $statutMembre
     * @return membre
     */
    public function setStatutMembre($statutMembre)
    {
        $this->statutMembre = $statutMembre;

        return $this;
    }

    /**
     * Get statutMembre
     *
     * @return string 
     */
    public function getStatutMembre()
    {
        return $this->statutMembre;
    }
}
