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
      * @ORM\JoinColumn (name="roomId" , referencedColumnName="id")
     */
    private $room;

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
     *@ORM\OneToOne(targetEntity="typeChambre")
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
     * @var int
     *
     * @ORM\Column(name="id_Room", type="integer")
     */
    private $idRoom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrive", type="date")
     */
    private $dateArrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie", type="date")
     */
    private $dateSortie;

    /**
     * @var int
     *
     * @ORM\Column(name="id_type", type="integer")
     */
    private $idType;

    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer")
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
     * Set idRoom
     *
     * @param integer $idRoom
     *
     * @return Reservation
     */
    public function setIdRoom($idRoom)
    {
        $this->idRoom = $idRoom;

        return $this;
    }

    /**
     * Get idRoom
     *
     * @return int
     */
    public function getIdRoom()
    {
        return $this->idRoom;
    }

    /**
     * Set dateArrive
     *
     * @param \DateTime $dateArrive
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
     * @return \DateTime
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
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
     * @return \DateTime
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return Reservation
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return int
     */
    public function getIdType()
    {
        return $this->idType;
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

