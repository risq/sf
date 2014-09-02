<?php

namespace elinoix\shopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Livraison {

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
     * @ORM\Column(name="type", type="string", columnDefinition="ENUM('Camion','Colissimo')", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true )
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="Organisation", inversedBy="livraison")
     * @ORM\JoinColumn(name="organisation_id", referencedColumnName="id", nullable=false)
     */
    private $organisation;

    /**
     * @ORM\ManyToOne(targetEntity="Commande", inversedBy="livraison", cascade={"persist","remove"})
     */
    private $commande;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set organisation
     *
     * @param \elinoix\shopBundle\Entity\Organisation $organisation
     * @return Livraison
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

    public function __construct() {
        $this->date = new \DateTime();
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Livraison
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
     * Set type
     *
     * @param string $type
     * @return Livraison
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Livraison
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire() {
        return $this->commentaire;
    }


    /**
     * Set commande
     *
     * @param \elinoix\shopBundle\Entity\Commande $commande
     * @return Livraison
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
