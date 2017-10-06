<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere_Eleve
 * @ORM\Entity
 * @ORM\Table(name="matiere_eleve")
 * @ORM\HasLifecycleCallbacks()
 */
class MatiereEleve
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var integer $id
     */
    protected $id;


    /**
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="notes")
     * @ORM\JoinColumn(name="matiere_id", referencedColumnName="id")
     * */
    protected $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Eleve", inversedBy="notes")
     * @ORM\JoinColumn(name="eleve_id", referencedColumnName="id")
     * */
    protected $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="Evaluation", inversedBy="notes")
     * @ORM\JoinColumn(name="evaluation_id", referencedColumnName="id")
     * */
    protected $evaluation;

    /**
     * @var float $note
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;
   

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
     * Set note
     *
     * @param float $note
     *
     * @return MatiereEleve
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set matiere
     *
     * @param \SchoolBundle\Entity\Matiere $matiere
     *
     * @return MatiereEleve
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
     * Set eleve
     *
     * @param \AppBundle\Entity\Eleve $eleve
     *
     * @return MatiereEleve
     */
    public function setEleve(\AppBundle\Entity\Eleve $eleve = null)
    {
        $this->eleve = $eleve;
    
        return $this;
    }

    /**
     * Get eleve
     *
     * @return \AppBundle\Entity\Eleve
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * Set evaluation
     *
     * @param \SchoolBundle\Entity\Evaluation $evaluation
     *
     * @return MatiereEleve
     */
    public function setEvaluation(\SchoolBundle\Entity\Evaluation $evaluation = null)
    {
        $this->evaluation = $evaluation;
    
        return $this;
    }

    /**
     * Get evaluation
     *
     * @return \SchoolBundle\Entity\Evaluation
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }
}
