<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retard
 *
 * @ORM\Table(name="retard")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\RetardRepository")
 */
class Retard
{
    /**
     * @var Eleve
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Eleve", inversedBy="retards")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $eleve;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Retard
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Retard
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set eleve
     *
     * @param \ApplBundle\Entity\Eleve $eleve
     *
     * @return Retard
     */
    public function setEleve(\UserBundle\Entity\Eleve $eleve = null)
    {
        $this->eleve = $eleve;

        return $this;
    }

    /**
     * Get eleve
     *
     * @return \UserBundle\Entity\Eleve
     */
    public function getEleve()
    {
        return $this->eleve;
    }
}
