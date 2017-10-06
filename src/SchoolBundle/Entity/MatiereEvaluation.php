<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere_Evaluation
 * @ORM\Entity
 * @ORM\Table(name="matiere_evaluation")
 * @ORM\HasLifecycleCallbacks()
 */
class MatiereEvaluation
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
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="evaluations")
     * @ORM\JoinColumn(name="matiere_id", referencedColumnName="id")
     * */
    protected $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Classe", inversedBy="evaluations")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     * */
    protected $classe;

    /**
     * @ORM\ManyToOne(targetEntity="Evaluation", inversedBy="evaluations")
     * @ORM\JoinColumn(name="evaluation_id", referencedColumnName="id")
     * */
    protected $evaluation;

   

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
     * Set matiere
     *
     * @param \SchoolBundle\Entity\Matiere $matiere
     *
     * @return MatiereEvaluation
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
     * @return MatiereEvaluation
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
     * Set evaluation
     *
     * @param \SchoolBundle\Entity\Evaluation $evaluation
     *
     * @return MatiereEvaluation
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
