<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Parental extends User
{
    /**
     * @var Ecole
     *
     * @Assert\Type(type="SchoolBundle\Entity\Ecole")
     *
     * @Assert\Valid()
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Ecole", inversedBy="parents")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $ecole;

    /**
     * @var Eleve
     *
     * @Assert\Type(type="UserBundle\Entity\Eleve")
     *
     * @Assert\Valid()
     *
     * @ORM\OneToMany(targetEntity="Eleve",mappedBy="parent")
     */
    private $eleves;


     /**
     * @var string $type
     *
     * @ORM\Column(name="typeUser", type="string", length=255, nullable=true)
     */
    private $typeUser="Parent";
    /**
     * @var string
     *
     * @ORM\Column(name="nomMere", type="string", length=255)
     */
    private $nomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomMere", type="string", length=255)
     */
    private $prenomMere;

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
     * @ORM\Column(name="CIN", type="string", length=255)
     */
    private $cIN;

    /**
     * @var string
     *
     * @ORM\Column(name="professionPere", type="string", length=255)
     */
    private $professionPere;

    /**
     * @var string
     *
     * @ORM\Column(name="professionMere", type="string", length=255)
     */
    private $professionMere;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
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
     * @ORM\Column(name="mobil", type="string", length=255)
     */
    private $mobil;

    /**
     * Set nomMere
     *
     * @param string $nomMere
     *
     * @return Parental
     */
    public function setNomMere($nomMere)
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    /**
     * Get nomMere
     *
     * @return string
     */
    public function getNomMere()
    {
        return $this->nomMere;
    }

    /**
     * Set prenomMere
     *
     * @param string $prenomMere
     *
     * @return Parental
     */
    public function setPrenomMere($prenomMere)
    {
        $this->prenomMere = $prenomMere;

        return $this;
    }

    /**
     * Get prenomMere
     *
     * @return string
     */
    public function getPrenomMere()
    {
        return $this->prenomMere;
    }

    /**
     * Set prenomPere
     *
     * @param string $prenomPere
     *
     * @return Parental
     */
    public function setPrenomPere($prenomPere)
    {
        $this->prenomPere = $prenomPere;

        return $this;
    }

    /**
     * Get prenomPere
     *
     * @return string
     */
    public function getPrenomPere()
    {
        return $this->prenomPere;
    }

    /**
     * Set cIN
     *
     * @param string $cIN
     *
     * @return Parental
     */
    public function setCIN($cIN)
    {
        $this->cIN = $cIN;

        return $this;
    }

    /**
     * Get cIN
     *
     * @return string
     */
    public function getCIN()
    {
        return $this->cIN;
    }

    /**
     * Set professionPere
     *
     * @param string $professionPere
     *
     * @return Parental
     */
    public function setProfessionPere($professionPere)
    {
        $this->professionPere = $professionPere;

        return $this;
    }

    /**
     * Get professionPere
     *
     * @return string
     */
    public function getProfessionPere()
    {
        return $this->professionPere;
    }

    /**
     * Set professionMere
     *
     * @param string $professionMere
     *
     * @return Parental
     */
    public function setProfessionMere($professionMere)
    {
        $this->professionMere = $professionMere;

        return $this;
    }

    /**
     * Get professionMere
     *
     * @return string
     */
    public function getProfessionMere()
    {
        return $this->professionMere;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Parental
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
     * @return Parental
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
     * @return Parental
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
     * Set mobil
     *
     * @param string $mobil
     *
     * @return Parental
     */
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;

        return $this;
    }

    /**
     * Get mobil
     *
     * @return string
     */
    public function getMobil()
    {
        return $this->mobil;
    }

   

    /**
     * Set typeUser
     *
     * @param string $typeUser
     *
     * @return Parental
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Parental
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
     * @return Parental
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
     * Add eleve
     *
     * @param \UserBundle\Entity\Eleve $eleve
     *
     * @return Parental
     */
    public function addEleve(\UserBundle\Entity\Eleve $eleve)
    {
        $this->eleves[] = $eleve;

        return $this;
    }

    /**
     * Remove eleve
     *
     * @param \UserBundle\Entity\Eleve $eleve
     */
    public function removeEleve(\UserBundle\Entity\Eleve $eleve)
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
     * Set ecole
     *
     * @param \SchoolBundle\Entity\Ecole $ecole
     *
     * @return Parental
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
     * Add elefe
     *
     * @param \UserBundle\Entity\Eleve $elefe
     *
     * @return Parental
     */
    public function addElefe(\UserBundle\Entity\Eleve $elefe)
    {
        $this->eleves[] = $elefe;

        return $this;
    }

    /**
     * Remove elefe
     *
     * @param \UserBundle\Entity\Eleve $elefe
     */
    public function removeElefe(\UserBundle\Entity\Eleve $elefe)
    {
        $this->eleves->removeElement($elefe);
    }
}
