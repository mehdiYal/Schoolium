<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\ClasseRepository")
 */
class Classe
{
    /**
     * @var Eleve
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Eleve",mappedBy="classe")
     */
    private $eleves;

    /**
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\MatiereEvaluation", mappedBy="matiere", cascade={"persist"})
     */
    private $evaluations;

    /**
     * @var EnsMat
     *
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\EnsMat",mappedBy="classe")
     */
    private $ensMat;

    /**
     * @var Enseignant
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Enseignant", inversedBy="isResponsable")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $responsable;

    /**
     * @var Annee
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Annee", inversedBy="classes")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $annee;

    /**
     * @var Ecole
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Ecole", inversedBy="classes")
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
     * @return Classe
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
     * @return Classe
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
        $this->enseignants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add enseignant
     *
     * @param \AppBundle\Entity\Enseignant $enseignant
     *
     * @return Classe
     */
    public function addEnseignant(\AppBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignants[] = $enseignant;

        return $this;
    }

    /**
     * Remove enseignant
     *
     * @param \AppBundle\Entity\Enseignant $enseignant
     */
    public function removeEnseignant(\AppBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignants->removeElement($enseignant);
    }

    /**
     * Get enseignants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignants()
    {
        return $this->enseignants;
    }

    /**
     * Set responsable
     *
     * @param \AppBundle\Entity\Enseignant $responsable
     *
     * @return Classe
     */
    public function setResponsable(\AppBundle\Entity\Enseignant $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \AppBundle\Entity\Enseignant
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set ecole
     *
     * @param \SchoolBundle\Entity\Ecole $ecole
     *
     * @return Classe
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

    /**
     * Set annee
     *
     * @param \SchoolBundle\Entity\Annee $annee
     *
     * @return Classe
     */
    public function setAnnee(\SchoolBundle\Entity\Annee $annee = null)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \SchoolBundle\Entity\Annee
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Add eleve
     *
     * @param \AppBundle\Entity\Eleve $eleve
     *
     * @return Classe
     */
    public function addElefe(\AppBundle\Entity\Eleve $eleve)
    {
        $this->eleves[] = $eleve;

        return $this;
    }

    /**
     * Remove eleve
     *
     * @param \AppBundle\Entity\Eleve $eleve
     */
    public function removeEleve(\AppBundle\Entity\Eleve $eleve)
    {
        $this->eleves->removeElement($eleve);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * Add matiere
     *
     * @param \SchoolBundle\Entity\Matiere $matiere
     *
     * @return Classe
     */
    public function addMatiere(\SchoolBundle\Entity\Matiere $matiere)
    {
        $this->matieres[] = $matiere;

        return $this;
    }

    /**
     * Remove matiere
     *
     * @param \SchoolBundle\Entity\Matiere $matiere
     */
    public function removeMatiere(\SchoolBundle\Entity\Matiere $matiere)
    {
        $this->matieres->removeElement($matiere);
    }

    /**
     * Get matieres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatieres()
    {
        return $this->matieres;
    }

    /**
     * Add ensMat
     *
     * @param \SchoolBundle\Entity\EnsMat $ensMat
     *
     * @return Classe
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
     * Remove elefe
     *
     * @param \AppBundle\Entity\Eleve $elefe
     */
    public function removeElefe(\AppBundle\Entity\Eleve $elefe)
    {
        $this->eleves->removeElement($elefe);
    }

    /**
     * Add evaluation
     *
     * @param \SchoolBundle\Entity\MatiereEvaluation $evaluation
     *
     * @return Classe
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
