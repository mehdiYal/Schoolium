<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TravailRealise
 *
 * @ORM\Table(name="travail_realise")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\TravailRealiseRepository")
 */
class TravailRealise
{

    /**
     * @var Annee
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Annee", inversedBy="classes")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $annee;

    /**
     * @var Enseignant
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Enseignant", inversedBy="matEns")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $enseignant;

    /**
     * @var Matiere
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Matiere", inversedBy="ensMat")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $matiere;

    /**
     * @var Classe
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Classe", inversedBy="ensMat")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $classe;

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
     * @ORM\Column(name="travail", type="string", length=255,  options={"default"=""})
     */
    private $travail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

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
     * @return EnsMat
     */
    public function setEnseignant(\AppBundle\Entity\Enseignant $enseignant = null)
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
     * @return EnsMat
     */
    public function setMatiere(\SchoolBundle\Entity\Matiere $matiere = null)
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
     * @return EnsMat
     */
    public function setClasse(\SchoolBundle\Entity\Classe $classe = null)
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
     * Set travail
     *
     * @param string $travail
     *
     * @return TravailRealise
     */
    public function setTravail($travail)
    {
        $this->travail = $travail;
    
        return $this;
    }

    /**
     * Get travail
     *
     * @return string
     */
    public function getTravail()
    {
        return $this->travail;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return TravailRealise
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set annee
     *
     * @param \SchoolBundle\Entity\Annee $annee
     *
     * @return TravailRealise
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
}
