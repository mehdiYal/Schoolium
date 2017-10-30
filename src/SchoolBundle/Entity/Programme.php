<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Programme
 *
 * @ORM\Table(name="programme")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\ProgrammeRepository")
 */
class Programme
{
    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Enseignant")
    * @ORM\JoinColumn(nullable=false)
   */
    private $enseignant;
    
   
    /**
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Matiere")
     * @ORM\JoinColumn(nullable=false)
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Salle")
     * @ORM\JoinColumn(nullable=false)
     */
    private $salle;

    /**
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Classe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classe;

    /**
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Horraire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $horraire;
    
    /**
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Jour")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jour;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

   

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
     * Set enseignant
     *
     * @param \AppBundle\Entity\Enseignant $enseignant
     *
     * @return Programme
     */
    public function setEnseignant(\AppBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant = $enseignant;
    
        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \AppBundle\Entity\Enseignant
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set matiere
     *
     * @param \SchoolBundle\Entity\Matiere $matiere
     *
     * @return Programme
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
     * Set salle
     *
     * @param \SchoolBundle\Entity\Salle $salle
     *
     * @return Programme
     */
    public function setSalle(\SchoolBundle\Entity\Salle $salle)
    {
        $this->salle = $salle;
    
        return $this;
    }

    /**
     * Get salle
     *
     * @return \SchoolBundle\Entity\Salle
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set classe
     *
     * @param \SchoolBundle\Entity\Classe $classe
     *
     * @return Programme
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

    /**
     * Set horraire
     *
     * @param \SchoolBundle\Entity\Horraire $horraire
     *
     * @return Programme
     */
    public function setHorraire(\SchoolBundle\Entity\Horraire $horraire)
    {
        $this->horraire = $horraire;
    
        return $this;
    }

    /**
     * Get horraire
     *
     * @return \SchoolBundle\Entity\Horraire
     */
    public function getHorraire()
    {
        return $this->horraire;
    }

    /**
     * Set jour
     *
     * @param \SchoolBundle\Entity\Jour $jour
     *
     * @return Programme
     */
    public function setJour(\SchoolBundle\Entity\Jour $jour)
    {
        $this->jour = $jour;
    
        return $this;
    }

    /**
     * Get jour
     *
     * @return \SchoolBundle\Entity\Jour
     */
    public function getJour()
    {
        return $this->jour;
    }
}
