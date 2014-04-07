<?php

namespace elinoix\shopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Commande
{
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commande
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
     * Set state
     *
     * @param string $state
     * @return Commande
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date = new \DateTime('NOW'); 
    }

    /**
     * Add products
     *
     * @param \elinoix\shopBundle\Entity\LigneCommande $products
     * @return Commande
     */
    public function addProduct(\elinoix\shopBundle\Entity\LigneCommande $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \elinoix\shopBundle\Entity\LigneCommande $products
     */
    public function removeProduct(\elinoix\shopBundle\Entity\LigneCommande $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add ligneCommandes
     *
     * @param \elinoix\shopBundle\Entity\LigneCommande $ligneCommandes
     * @return Commande
     */
    public function addLigneCommande(\elinoix\shopBundle\Entity\LigneCommande $ligneCommandes)
    {
        $this->ligneCommandes[] = $ligneCommandes;

        return $this;
    }

    /**
     * Remove ligneCommandes
     *
     * @param \elinoix\shopBundle\Entity\LigneCommande $ligneCommandes
     */
    public function removeLigneCommande(\elinoix\shopBundle\Entity\LigneCommande $ligneCommandes)
    {
        $this->ligneCommandes->removeElement($ligneCommandes);
    }

    /**
     * Get ligneCommandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLigneCommandes()
    {
        return $this->ligneCommandes;
    }

    /**
     * Set organisation
     *
     * @param \elinoix\shopBundle\Entity\Organisation $organisation
     * @return Commande
     */
    public function setOrganisation(\elinoix\shopBundle\Entity\Organisation $organisation = null)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return \elinoix\shopBundle\Entity\Organisation 
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Set prixTotal
     *
     * @param string $prixTotal
     * @return Commande
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return string 
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }
}
