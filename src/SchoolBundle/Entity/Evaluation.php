<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\EvaluationRepository")
 */
class Evaluation
{
    /**
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\MatiereEleve", mappedBy="evaluation", cascade={"persist"})
     */
    private $notes;
  
    /**
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\MatiereEvaluation", mappedBy="matiere", cascade={"persist"})
     */
    private $evaluations;

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
     * Constructor
     */
    public function __construct()
    {
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add note
     *
     * @param \SchoolBundle\Entity\MatiereEleve $note
     *
     * @return Evaluation
     */
    public function addNote(\SchoolBundle\Entity\MatiereEleve $note)
    {
        $this->notes[] = $note;
    
        return $this;
    }

    /**
     * Remove note
     *
     * @param \SchoolBundle\Entity\MatiereEleve $note
     */
    public function removeNote(\SchoolBundle\Entity\MatiereEleve $note)
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
     * @return Evaluation
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
