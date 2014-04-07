<?php

namespace elinoix\shopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Produit
 *
 * @ORM\Table(name="Produit")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 */
Class Produit {

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
     * @ORM\Column(name="poids", type="decimal")
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @ORM\OneToOne(targetEntity="Image", cascade={"persist"})
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    private $image;
    
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
     * @return Produit
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
     * Set poids
     *
     * @param string $poids
     * @return Produit
     */
    public function setPoids($poids) {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string 
     */
    public function getPoids() {
        return $this->poids;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Produit
     */
    public function setPrix($prix) {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix() {
        return $this->prix;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Produit
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite() {
        return $this->quantite;
    }


    /**
     * Set image
     *
     * @param \elinoix\shopBundle\Entity\Image $image
     * @return Produit
     */
    public function setImage(\elinoix\shopBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \elinoix\shopBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}
