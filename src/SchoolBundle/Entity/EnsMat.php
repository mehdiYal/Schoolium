<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnsMat
 *
 * @ORM\Table(name="ens_mat")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\EnsMatRepository")
 */
class EnsMat
{
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
}
