<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\MatiereRepository")
 */
class Matiere
{
    /**
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\MatiereEleve", mappedBy="matiere", cascade={"persist"})
     */
    private $notes;

    /**
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\MatiereEvaluation", mappedBy="matiere", cascade={"persist"})
     */
    private $evaluations;
  
    /**
     * @var EnsMat
     *
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\EnsMat",mappedBy="matiere")
     */
    private $ensMat;

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
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


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
     * @return Matiere
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
     * Set description
     *
     * @param string $description
     *
     * @return Matiere
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add class
     *
     * @param \SchoolBundle\Entity\Classe $class
     *
     * @return Matiere
     */
    public function addClass(\SchoolBundle\Entity\Classe $class)
    {
        $this->classes[] = $class;

        return $this;
    }

    /**
     * Remove class
     *
     * @param \SchoolBundle\Entity\Classe $class
     */
    public function removeClass(\SchoolBundle\Entity\Classe $class)
    {
        $this->classes->removeElement($class);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasses()
    {
        return $this->classes;
    }

    public function __toString() {
    return $this->nom;
    }

    /**
     * Add ensMat
     *
     * @param \SchoolBundle\Entity\EnsMat $ensMat
     *
     * @return Matiere
     */
    public function addEnsMat(\SchoolBundle\Entity\EnsMat $ensMat)
    {
        $this->ensMat[] = $ensMat;

        return $this;
    }

    /**
     * Remove ensMat
     *
     * @param \SchoolBundle\Entity\EnsMat $ensMat
     */
    public function removeEnsMat(\SchoolBundle\Entity\EnsMat $ensMat)
    {
        $this->ensMat->removeElement($ensMat);
    }

    /**
     * Get ensMat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnsMat()
    {
        return $this->ensMat;
    }


    /**
     * Add note
     *
     * @param \AppBundle\Entity\Eleve $note
     *
     * @return Matiere
     */
    public function addNote(\AppBundle\Entity\Eleve $note)
    {
        $this->notes[] = $note;
    
        return $this;
    }

    /**
     * Remove note
     *
     * @param \AppBundle\Entity\Eleve $note
     */
    public function removeNote(\AppBundle\Entity\Eleve $note)
    {
        $this->notes->removeElement($note);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add evaluation
     *
     * @param \SchoolBundle\Entity\MatiereEvaluation $evaluation
     *
     * @return Matiere
     */
    public function addEvaluation(\SchoolBundle\Entity\MatiereEvaluation $evaluation)
    {
        $this->evaluations[] = $evaluation;
    
        return $this;
    }

    /**
     * Remove evaluation
     *
     * @param \SchoolBundle\Entity\MatiereEvaluation $evaluation
     */
    public function removeEvaluation(\SchoolBundle\Entity\MatiereEvaluation $evaluation)
    {
        $this->evaluations->removeElement($evaluation);
    }

    /**
     * Get evaluations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvaluations()
    {
        return $this->evaluations;
    }
}
