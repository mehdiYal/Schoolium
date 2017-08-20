<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\SalleRepository")
 */
class Salle
{
    /**
     * @var Ecole
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Ecole", inversedBy="enseignants")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $ecole;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="equipement", type="text", nullable=true)
     */
    private $equipement;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Salle
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return Salle
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return int
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set equipement
     *
     * @param string $equipement
     *
     * @return Salle
     */
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }

    /**
     * Get equipement
     *
     * @return string
     */
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Set ecole
     *
     * @param \SchoolBundle\Entity\Ecole $ecole
     *
     * @return Salle
     */
    public function setEcole(\SchoolBundle\Entity\Ecole $ecole = null)
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * Get ecole
     *
     * @return \SchoolBundle\Entity\Ecole
     */
    public function getEcole()
    {
        return $this->ecole;
    }
}
