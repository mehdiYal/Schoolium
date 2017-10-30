<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\CoursRepository")
 */
class Cours
{
    /**
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Classe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classe;

    /**
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Matiere")
     * @ORM\JoinColumn(nullable=false)
     */
    private $matiere;

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
     * @ORM\Column(name="titre", type="string", length=55)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="devoir", type="string", length=255)
     */
    private $devoir;

     /**
     * @var string
     *
     * @ORM\Column(name="support", type="string", length=255)
     */
    private $support;

    /**
     * @var string
     *
     * @ORM\Column(name="annexe", type="string", length=255)
     */
    private $annexe;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Cours
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set devoir
     *
     * @param string $devoir
     *
     * @return Cours
     */
    public function setDevoir($devoir)
    {
        $this->devoir = $devoir;
    
        return $this;
    }

    /**
     * Get devoir
     *
     * @return string
     */
    public function getDevoir()
    {
        return $this->devoir;
    }

    /**
     * Set support
     *
     * @param string $support
     *
     * @return Cours
     */
    public function setSupport($support)
    {
        $this->support = $support;
    
        return $this;
    }

    /**
     * Get support
     *
     * @return string
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Set annexe
     *
     * @param string $annexe
     *
     * @return Cours
     */
    public function setAnnexe($annexe)
    {
        $this->annexe = $annexe;
    
        return $this;
    }

    /**
     * Get annexe
     *
     * @return string
     */
    public function getAnnexe()
    {
        return $this->annexe;
    }

    /**
     * Set matiere
     *
     * @param \SchoolBundle\Entity\Matiere $matiere
     *
     * @return Cours
     */
    public function setMatiere(\SchoolBundle\Entity\Matiere $matiere)
    {
        $this->matiere = $matiere;
    
        return $this;
    }

    /**
     * Get matiere
     *
     * @return \SchoolBundle\Entity\Matiere
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set classe
     *
     * @param \SchoolBundle\Entity\Classe $classe
     *
     * @return Cours
     */
    public function setClasse(\SchoolBundle\Entity\Classe $classe)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return \SchoolBundle\Entity\Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

   
}
