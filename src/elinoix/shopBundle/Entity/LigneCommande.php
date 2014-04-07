<?php

namespace elinoix\shopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class LigneCommande
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
     * @var string
     *
     * @ORM\Column(name="prixUnitaire", type="decimal")
     */
    private $prixUnitaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="Produit", inversedBy="ligneCommandes")
     * @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     */
    private $produit;
    
    /**
     * @ORM\ManyToOne(targetEntity="Commande", inversedBy="ligneCommandes")
     * @ORM\JoinColumn(name="commande_id", referencedColumnName="id")
     */
    private $commande;

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
     * Set prixUnitaire
     *
     * @param string $prixUnitaire
     * @return LigneCommande
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return string 
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return LigneCommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set produit
     *
     * @param \elinoix\shopBundle\Entity\Produit $produit
     * @return LigneCommande
     */
    public function setProduit(\elinoix\shopBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \elinoix\shopBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set commande
     *
     * @param \elinoix\shopBundle\Entity\Commande $commande
     * @return LigneCommande
     */
    public function setCommande(\elinoix\shopBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \elinoix\shopBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
