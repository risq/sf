<?php

namespace elinoix\shopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Organisation
 *
 * @ORM\Table(name="Organisation")
 * @ORM\Entity
 */
class Organisation implements UserInterface, \Serializable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=255)
     */
    private $pass;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="elinoix\shopBundle\Entity\Client", mappedBy="organisation")
     */
    private $clients;

    /**
     * @var bool
     *
     * @ORM\Column(name="admin", type="boolean")
     */
    private $admin;

    /**
     * Constructor
     */
    public function __construct() {
        $this->clients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Organisation
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Organisation
     */
    public function setLogin($login) {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin() {
        return $this->login;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return Organisation
     */
    public function setPass($pass) {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass() {
        return $this->pass;
    }

    /**
     * Add clients
     *
     * @param \elinoix\shopBundle\Entity\Client $clients
     * @return Organisation
     */
    public function addClient(\elinoix\shopBundle\Entity\Client $clients) {
        $this->clients[] = $clients;

        return $this;
    }

    /**
     * Remove clients
     *
     * @param \elinoix\shopBundle\Entity\Client $clients
     */
    public function removeClient(\elinoix\shopBundle\Entity\Client $clients) {
        $this->clients->removeElement($clients);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClients() {
        return $this->clients;
    }

    /**
     * Set admin
     *
     * @param \bool $admin
     * @return Organisation
     */
    public function setAdmin($admin) {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return \bool 
     */
    public function getAdmin() {
        return $this->admin;
    }

    public function __toString() {
        return $this->nom;
    }
    
    // USER INTERFACE
    public function getUsername() {
        return $this->login;
    }

    public function getSalt() {
        return null;
    }

    public function getPassword() {
        return $this->pass;
    }

    public function getRoles() {
        if ($this->getAdmin()) // Si le client est administrateur
            return array('ROLE_ADMIN'); // on lui accorde le rôle ADMIN
        else
            return array('ROLE_USER'); // sinon le rôle USER
    }

    public function eraseCredentials() {// rien à faire ici
    }

    public function serialize() { // pour pouvoir sérialiser le Client en session
        return serialize(array($this->id));
    }

    public function unserialize($serialized) {
        list ($this->id) = unserialize($serialized);
    }

}
