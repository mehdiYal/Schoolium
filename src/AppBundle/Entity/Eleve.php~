<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Eleve extends User
{
    
    /**
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\MatiereEleve", mappedBy="eleve", cascade={"persist"})
     */
    private $notes;

    /**
     * @var Classe
     *
     * @ORM\OneToMany(targetEntity="Retard",mappedBy="eleve")
     */
    private $retards;

    /**
     * @var Classe
     *
     * @ORM\OneToMany(targetEntity="Absence",mappedBy="eleve")
     */
    private $absences;

    /**
     * @var Classe
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Classe", inversedBy="eleves")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $classe;

    /**
     * @var Annee
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Annee", inversedBy="eleves")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $annee;    

    /**
     * @var Ecole
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Ecole", inversedBy="eleves")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $ecole;

    /**
     * @var Transport
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Transport", inversedBy="eleves")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $transport;

     /**
     * @var Parental
     *
     * @Assert\Type(type="AppBundle\Entity\Parental")
     *
     * @Assert\Valid()
     *
     * @ORM\ManyToOne(targetEntity="Parental", inversedBy="eleves")
     *
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    private $parent;

     /**
     * @var string $type
     *
     * @ORM\Column(name="typeUser", type="string", length=255, nullable=true)
     */
    private $typeUser="Eleve";

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=255)
     */
    private $nationalite;

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
     * @ORM\Column(name="mobile", type="integer")
     */
    private $mobile;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="ecoleID", type="string", length=255)
     */
    private $ecoleID;

    /**
     * @var string
     *
     * @ORM\Column(name="groupeSanguin", type="string", length=255)
     */
    private $groupeSanguin;

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
     * @return Eleve
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
     * @return Eleve
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
     * @return Eleve
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
     * Set dateDeNaissance
     *
     * @param \DateTime $dateDeNaissance
     *
     * @return Eleve
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
     * @return Eleve
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
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Eleve
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Eleve
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
     * @return Eleve
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
     * Set mobile
     *
     * @param integer $mobile
     *
     * @return Eleve
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return int
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Eleve
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
     * Set genre
     *
     * @param string $genre
     *
     * @return Eleve
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
     * Set ecoleID
     *
     * @param string $ecoleID
     *
     * @return Eleve
     */
    public function setEcoleID($ecoleID)
    {
        $this->ecoleID = $ecoleID;

        return $this;
    }

    /**
     * Get ecoleID
     *
     * @return string
     */
    public function getEcoleID()
    {
        return $this->ecoleID;
    }

    /**
     * Set groupeSanguin
     *
     * @param string $groupeSanguin
     *
     * @return Eleve
     */
    public function setGroupeSanguin($groupeSanguin)
    {
        $this->groupeSanguin = $groupeSanguin;

        return $this;
    }

    /**
     * Get groupeSanguin
     *
     * @return string
     */
    public function getGroupeSanguin()
    {
        return $this->groupeSanguin;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Eleve
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
     * @return eleve
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
     * Set parent
     *
     * @param \AppBundle\Entity\Parental $parent
     *
     * @return Eleve
     */
    public function setParent(\AppBundle\Entity\Parental $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\Parental
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set ecole
     *
     * @param \SchoolBundle\Entity\Ecole $ecole
     *
     * @return Eleve
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
     * Set classe
     *
     * @param \SchoolBundle\Entity\Classe $classe
     *
     * @return Eleve
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
     * Set transport
     *
     * @param \SchoolBundle\Entity\Transport $transport
     *
     * @return eleve
     */
    public function setTransport(\SchoolBundle\Entity\Transport $transport = null)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return \SchoolBundle\Entity\Transport
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Add retard
     *
     * @param \AppBundle\Entity\Retard $retard
     *
     * @return Eleve
     */
    public function addRetard(\AppBundle\Entity\Retard $retard)
    {
        $this->retards[] = $retard;

        return $this;
    }

    /**
     * Remove retard
     *
     * @param \AppBundle\Entity\Retard $retard
     */
    public function removeRetard(\AppBundle\Entity\Retard $retard)
    {
        $this->retards->removeElement($retard);
    }

    /**
     * Get retards
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRetards()
    {
        return $this->retards;
    }

    /**
     * Add absence
     *
     * @param \AppBundle\Entity\Absence $absence
     *
     * @return Eleve
     */
    public function addAbsence(\AppBundle\Entity\Absence $absence)
    {
        $this->absences[] = $absence;

        return $this;
    }

    /**
     * Remove absence
     *
     * @param \AppBundle\Entity\Absence $absence
     */
    public function removeAbsence(\AppBundle\Entity\Absence $absence)
    {
        $this->absences->removeElement($absence);
    }

    /**
     * Get absences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbsences()
    {
        return $this->absences;
    }

    /**
     * Set annee
     *
     * @param \SchoolBundle\Entity\Annee $annee
     *
     * @return Eleve
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
     * Add note
     *
     * @param \AppBundle\Entity\Eleve $note
     *
     * @return Eleve
     */
    public function addNote(\AppBundle\Entity\Eleve $note)
    {
        $this->notes[] = $note;
    
        return $this;
    }

    /**
     * Remove note
     *
     * @param \AppBundle\Entity\Eleve $note
     */
    public function removeNote(\AppBundle\Entity\Eleve $note)
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
}
