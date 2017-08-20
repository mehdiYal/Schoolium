<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ecole
 *
 * @ORM\Table(name="ecole")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\EcoleRepository")
 */
class Ecole
{
    /**
     * @var Classe
     *
     * @ORM\OneToMany(targetEntity="Classe",mappedBy="ecole")
     */
    private $classes;

    /**
     * @var Salle
     *
     * @ORM\OneToMany(targetEntity="Salle",mappedBy="ecole")
     */
    private $salles;

    /**
     * @var Enseignant
     *
     * @Assert\Type(type="AppBundle\Entity\Enseignant")
     *
     * @Assert\Valid()
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Enseignant",mappedBy="ecole")
     */
    private $enseignants;

    /**
     * @var Eleve
     *
     * @Assert\Type(type="AppBundle\Entity\Eleve")
     *
     * @Assert\Valid()
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Eleve",mappedBy="ecole")
     */
    private $eleves;

    /**
     * @var Transport
     *
     * @Assert\Type(type="SchoolBundle\Entity\Transport")
     *
     * @Assert\Valid()
     *
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\Transport",mappedBy="ecole")
     */
    private $transports;

    /**
     * @var Parental
     *
     * @Assert\Type(type="AppBundle\Entity\Parental")
     *
     * @Assert\Valid()
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Parental",mappedBy="ecole")
     */
    private $parents;

     /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Admin", mappedBy="ecole")
     */
    private $admin;

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
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="informations", type="text")
     */
    private $informations;


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
     * Set logo
     *
     * @param string $logo
     *
     * @return Ecole
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Ecole
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
     * Set code
     *
     * @param string $code
     *
     * @return Ecole
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Ecole
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Ecole
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Ecole
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Ecole
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Ecole
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Ecole
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set informations
     *
     * @param string $informations
     *
     * @return Ecole
     */
    public function setInformations($informations)
    {
        $this->informations = $informations;

        return $this;
    }

    /**
     * Get informations
     *
     * @return string
     */
    public function getInformations()
    {
        return $this->informations;
    }

    /**
     * Set admin
     *
     * @param \AppBundle\Entity/Admin $admin
     *
     * @return Ecole
     */
    public function setAdmin(\AppBundle\Entity\Admin $admin = null)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return \AppBundle\\Entity\Admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Parents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add parent
     *
     * @param \AppBundle\Entity\Parental $parent
     *
     * @return Ecole
     */
    public function addParent(\AppBundle\Entity\Parental $parent)
    {
        $this->Parents[] = $parent;

        return $this;
    }

    /**
     * Remove parent
     *
     * @param \AppBundle\Entity\Parental $parent
     */
    public function removeParent(\AppBundle\Entity\Parental $parent)
    {
        $this->Parents->removeElement($parent);
    }

    /**
     * Get parents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Set parents
     *
     * @param \AppBundle\Entity\Parental $parents
     *
     * @return Ecole
     */
    public function setParents(\AppBundle\Entity\Parental $parents = null)
    {
        $this->parents = $parents;

        return $this;
    }

    /**
     * Add enseignant
     *
     * @param \AppBundle\Entity\Enseignant $enseignant
     *
     * @return Ecole
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
     * Add eleve
     *
     * @param \AppBundle\Entity\Eleve $eleve
     *
     * @return Ecole
     */
    public function addEleve(\AppBundle\Entity\Eleve $eleve)
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
     * Add class
     *
     * @param \SchoolBundle\Entity\Classe $class
     *
     * @return Ecole
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

    /**
     * Add elefe
     *
     * @param \AppBundle\Entity\Eleve $elefe
     *
     * @return Ecole
     */
    public function addElefe(\AppBundle\Entity\Eleve $elefe)
    {
        $this->eleves[] = $elefe;

        return $this;
    }

    /**
     * Add salle
     *
     * @param \SchoolBundle\Entity\Salle $salle
     *
     * @return Ecole
     */
    public function addSalle(\SchoolBundle\Entity\Salle $salle)
    {
        $this->salles[] = $salle;

        return $this;
    }

    /**
     * Remove salle
     *
     * @param \SchoolBundle\Entity\Salle $salle
     */
    public function removeSalle(\SchoolBundle\Entity\Salle $salle)
    {
        $this->salles->removeElement($salle);
    }

    /**
     * Get salles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSalles()
    {
        return $this->salles;
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
     * Add transport
     *
     * @param \SchoolBundle\Entity\Transport $transport
     *
     * @return Ecole
     */
    public function addTransport(\SchoolBundle\Entity\Transport $transport)
    {
        $this->transports[] = $transport;

        return $this;
    }

    /**
     * Remove transport
     *
     * @param \SchoolBundle\Entity\Transport $transport
     */
    public function removeTransport(\SchoolBundle\Entity\Transport $transport)
    {
        $this->transports->removeElement($transport);
    }

    /**
     * Get transports
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTransports()
    {
        return $this->transports;
    }
}
