<?php

namespace elinoix\shopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Commande {

    /**
     * @var integer
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
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="prixTotal", type="decimal")
     */
    private $prixTotal;

    /**
     * @ORM\OneToMany(targetEntity="LigneCommande", mappedBy="commande")
     */
    protected $ligneCommandes;

    /**
     * @ORM\ManyToOne(targetEntity="Organisation", inversedBy="commandes")
     * @ORM\JoinColumn(name="organisation_id", referencedColumnName="id")
     */
    private $organisation;

    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="commandes", cascade={"persist"})
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

    /**
     * @ORM\OneToMany(targetEntity="Livraison", mappedBy="commande", cascade={"persist","remove"})
     */
    private $livraison;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=255)
     */
    private $secret;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="elinoix\shopBundle\Entity\PaypalOrder", mappedBy="commande")
     */
    private $paypalOrders;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }
    
    public function __toString() {
        return "".$this->getId();
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commande
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Commande
     */
    public function setState($state) {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date = new \DateTime('NOW');
    }

    /**
     * Add products
     *
     * @param \elinoix\shopBundle\Entity\LigneCommande $products
     * @return Commande
     */
    public function addProduct(\elinoix\shopBundle\Entity\LigneCommande $products) {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \elinoix\shopBundle\Entity\LigneCommande $products
     */
    public function removeProduct(\elinoix\shopBundle\Entity\LigneCommande $products) {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts() {
        return $this->products;
    }

    /**
     * Add ligneCommandes
     *
     * @param \elinoix\shopBundle\Entity\LigneCommande $ligneCommandes
     * @return Commande
     */
    public function addLigneCommande(\elinoix\shopBundle\Entity\LigneCommande $ligneCommandes) {
        $this->ligneCommandes[] = $ligneCommandes;

        return $this;
    }

    /**
     * Remove ligneCommandes
     *
     * @param \elinoix\shopBundle\Entity\LigneCommande $ligneCommandes
     */
    public function removeLigneCommande(\elinoix\shopBundle\Entity\LigneCommande $ligneCommandes) {
        $this->ligneCommandes->removeElement($ligneCommandes);
    }

    /**
     * Get ligneCommandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLigneCommandes() {
        return $this->ligneCommandes;
    }

    /**
     * Set organisation
     *
     * @param \elinoix\shopBundle\Entity\Organisation $organisation
     * @return Commande
     */
    public function setOrganisation(\elinoix\shopBundle\Entity\Organisation $organisation = null) {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return \elinoix\shopBundle\Entity\Organisation 
     */
    public function getOrganisation() {
        return $this->organisation;
    }

    /**
     * Set prixTotal
     *
     * @param string $prixTotal
     * @return Commande
     */
    public function setPrixTotal($prixTotal) {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return string 
     */
    public function getPrixTotal() {
        return $this->prixTotal;
    }

    /**
     * Set secret
     *
     * @param string $secret
     * @return Commande
     */
    public function setSecret($secret) {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string 
     */
    public function getSecret() {
        return $this->secret;
    }

    /**
     * Set client
     *
     * @param \elinoix\shopBundle\Entity\Client $client
     * @return Commande
     */
    public function setClient(\elinoix\shopBundle\Entity\Client $client = null) {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \elinoix\shopBundle\Entity\Client 
     */
    public function getClient() {
        return $this->client;
    }

    /**
     * Add paypalOrders
     *
     * @param \elinoix\shopBundle\Entity\PaypalOrder $paypalOrders
     * @return Commande
     */
    public function addPaypalOrder(\elinoix\shopBundle\Entity\PaypalOrder $paypalOrders) {
        $this->paypalOrders[] = $paypalOrders;

        return $this;
    }

    /**
     * Remove paypalOrders
     *
     * @param \elinoix\shopBundle\Entity\PaypalOrder $paypalOrders
     */
    public function removePaypalOrder(\elinoix\shopBundle\Entity\PaypalOrder $paypalOrders) {
        $this->paypalOrders->removeElement($paypalOrders);
    }

    /**
     * Get paypalOrders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaypalOrders() {
        return $this->paypalOrders;
    }


    /**
     * Add livraison
     *
     * @param \elinoix\shopBundle\Entity\Livraison $livraison
     * @return Commande
     */
    public function addLivraison(\elinoix\shopBundle\Entity\Livraison $livraison)
    {
        $this->livraison[] = $livraison;

        return $this;
    }

    /**
     * Remove livraison
     *
     * @param \elinoix\shopBundle\Entity\Livraison $livraison
     */
    public function removeLivraison(\elinoix\shopBundle\Entity\Livraison $livraison)
    {
        $this->livraison->removeElement($livraison);
    }

    /**
     * Get livraison
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLivraison()
    {
        return $this->livraison;
    }
}
