<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Parental extends \AppBundle\Entity\Parental implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'ecole', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'eleves', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'typeUser', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'nomMere', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'prenomMere', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'nom', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'prenom', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'cIN', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'professionPere', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'professionMere', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'adresse', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'codePostal', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'telephone', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'mobil', 'id', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'roles'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'ecole', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'eleves', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'typeUser', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'nomMere', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'prenomMere', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'nom', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'prenom', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'cIN', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'professionPere', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'professionMere', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'adresse', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'codePostal', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'telephone', '' . "\0" . 'AppBundle\\Entity\\Parental' . "\0" . 'mobil', 'id', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'roles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Parental $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setNomMere($nomMere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomMere', [$nomMere]);

        return parent::setNomMere($nomMere);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomMere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomMere', []);

        return parent::getNomMere();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomMere($prenomMere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomMere', [$prenomMere]);

        return parent::setPrenomMere($prenomMere);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomMere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomMere', []);

        return parent::getPrenomMere();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomPere($prenomPere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomPere', [$prenomPere]);

        return parent::setPrenomPere($prenomPere);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomPere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomPere', []);

        return parent::getPrenomPere();
    }

    /**
     * {@inheritDoc}
     */
    public function setCIN($cIN)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCIN', [$cIN]);

        return parent::setCIN($cIN);
    }

    /**
     * {@inheritDoc}
     */
    public function getCIN()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCIN', []);

        return parent::getCIN();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfessionPere($professionPere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfessionPere', [$professionPere]);

        return parent::setProfessionPere($professionPere);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfessionPere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfessionPere', []);

        return parent::getProfessionPere();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfessionMere($professionMere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfessionMere', [$professionMere]);

        return parent::setProfessionMere($professionMere);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfessionMere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfessionMere', []);

        return parent::getProfessionMere();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal($codePostal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$codePostal]);

        return parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobil($mobil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobil', [$mobil]);

        return parent::setMobil($mobil);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobil', []);

        return parent::getMobil();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeUser($typeUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeUser', [$typeUser]);

        return parent::setTypeUser($typeUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeUser', []);

        return parent::getTypeUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function addEleve(\AppBundle\Entity\Eleve $eleve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEleve', [$eleve]);

        return parent::addEleve($eleve);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEleve(\AppBundle\Entity\Eleve $eleve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEleve', [$eleve]);

        return parent::removeEleve($eleve);
    }

    /**
     * {@inheritDoc}
     */
    public function getEleves()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEleves', []);

        return parent::getEleves();
    }

    /**
     * {@inheritDoc}
     */
    public function setEcole(\SchoolBundle\Entity\Ecole $ecole = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEcole', [$ecole]);

        return parent::setEcole($ecole);
    }

    /**
     * {@inheritDoc}
     */
    public function getEcole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEcole', []);

        return parent::getEcole();
    }

    /**
     * {@inheritDoc}
     */
    public function addElefe(\AppBundle\Entity\Eleve $elefe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addElefe', [$elefe]);

        return parent::addElefe($elefe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeElefe(\AppBundle\Entity\Eleve $elefe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeElefe', [$elefe]);

        return parent::removeElefe($elefe);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function addRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', [$role]);

        return parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameCanonical', []);

        return parent::getUsernameCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCanonical', []);

        return parent::getEmailCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', []);

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$role]);

        return parent::hasRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuperAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuperAdmin', []);

        return parent::isSuperAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', [$role]);

        return parent::removeRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical($usernameCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsernameCanonical', [$usernameCanonical]);

        return parent::setUsernameCanonical($usernameCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', [$salt]);

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical($emailCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCanonical', [$emailCanonical]);

        return parent::setEmailCanonical($emailCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$boolean]);

        return parent::setEnabled($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperAdmin($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuperAdmin', [$boolean]);

        return parent::setSuperAdmin($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$password]);

        return parent::setPlainPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$time]);

        return parent::setLastLogin($time);
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($confirmationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', [$confirmationToken]);

        return parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', [$date]);

        return parent::setPasswordRequestedAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', []);

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired($ttl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordRequestNonExpired', [$ttl]);

        return parent::isPasswordRequestNonExpired($ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNames', []);

        return parent::getGroupNames();
    }

    /**
     * {@inheritDoc}
     */
    public function hasGroup($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGroup', [$name]);

        return parent::hasGroup($name);
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
