<?php

namespace HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="HotelBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

     /**
      *@ORM\ManyToOne(targetEntity="Room" , inversedBy="reservations")
      * @ORM\JoinColumn (name="roomId" , referencedColumnName="id", nullable= true)
     */
    private $room;

    /**
     * Reservation constructor.
     * @param \DateTime $dateArrive
     */
    public function __construct()
    {
        $this->setDateCreation(new \DateTime());
    }

    /**
     * @return mixed
     */
    public function getTypeChambre()
    {
        return $this->typeChambre;
    }

    /**
     * @param mixed $typeChambre
     */
    public function setTypeChambre($typeChambre)
    {
        $this->typeChambre = $typeChambre;
    }


    /**
     *@ORM\ManyToOne(targetEntity="typeChambre" , inversedBy="reservations")
     * @ORM\JoinColumn (name="typeChambreId" , referencedColumnName="id")
     */
    private $typeChambre;

    /**
     * @return mixed
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param mixed $room
     */
    public function setRoom($room)
    {
        $this->room = $room;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param \DateTime $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }




    /**
     * @var \Date
     *
     * @ORM\Column(name="date_arrive", type="date")
     */
    private $dateArrive;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $date_creation;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_sortie", type="date")
     */
    private $dateSortie;


    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer", nullable= true)
     */
    private $idClient;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set dateArrive
     *
     * @param \Date $dateArrive
     *
     * @return Reservation
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return \Date
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set dateSortie
     *
     * @param \Date $dateSortie
     *
     * @return Reservation
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \Date
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }



    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Reservation
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}

