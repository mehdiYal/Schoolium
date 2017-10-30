<?php

namespace UserBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Admin extends User
{
    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="SchoolBundle\Entity\Ecole", inversedBy="admin")
     * @ORM\JoinColumn(name="ecole", referencedColumnName="id", onDelete="CASCADE")
     */
    private $ecole;

     /**
     * @var string $type
     *
     * @ORM\Column(name="typeUser", type="string", length=255, nullable=true)
     */
    private $typeUser="Admin";

     /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     * 
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeNaissance", type="date")
     */
    private $dateDeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuDeNaissance", type="string", length=255)
     */
    private $lieuDeNaissance;

    /**
     * @var int
     *
     * @ORM\Column(name="CIN", type="integer")
     */
    private $cIN;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Admin
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Admin
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Admin
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Admin
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set dateDeNaissance
     *
     * @param \DateTime $dateDeNaissance
     *
     * @return Admin
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return \DateTime
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set lieuDeNaissance
     *
     * @param string $lieuDeNaissance
     *
     * @return Admin
     */
    public function setLieuDeNaissance($lieuDeNaissance)
    {
        $this->lieuDeNaissance = $lieuDeNaissance;

        return $this;
    }

    /**
     * Get lieuDeNaissance
     *
     * @return string
     */
    public function getLieuDeNaissance()
    {
        return $this->lieuDeNaissance;
    }

    /**
     * Set cIN
     *
     * @param integer $cIN
     *
     * @return Admin
     */
    public function setCIN($cIN)
    {
        $this->cIN = $cIN;

        return $this;
    }

    /**
     * Get cIN
     *
     * @return int
     */
    public function getCIN()
    {
        return $this->cIN;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Admin
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
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Admin
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Admin
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Admin
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
     * Set typeUser
     *
     * @param string $typeUser
     *
     * @return Admin
     */
    public function setTypeUser($typeUser)
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    /**
     * Get typeUser
     *
     * @return string
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * Set customer
     *
     * @param \UserBundle\Entity\SchoolBundle/Ecole $customer
     *
     * @return Admin
     */
    public function setCustomer(\UserBundle\Entity\SchoolBundle\Ecole $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \UserBundle\Entity\SchoolBundle\Ecole
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set ecole
     *
     * @param \SchoolBundle\Entity\Ecole $ecole
     *
     * @return Admin
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
}
