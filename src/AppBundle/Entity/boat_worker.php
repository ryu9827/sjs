<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="boat_worker")
*/
class boat_worker
{

/**
* @ORM\Column(type="integer")
*/
	private $boat_id;

/**
* @ORM\Column(type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
	private $id;

/**
* @ORM\Column(type="integer")
*/
	private $worker_id;


    /**
     * Set boatId
     *
     * @param integer $boatId
     *
     * @return boat_worker
     */
    public function setBoatId($boatId)
    {
        $this->boat_id = $boatId;

        return $this;
    }

    /**
     * Get boatId
     *
     * @return integer
     */
    public function getBoatId()
    {
        return $this->boat_id;
    }

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
     * Set workerId
     *
     * @param integer $workerId
     *
     * @return boat_worker
     */
    public function setWorkerId($workerId)
    {
        $this->worker_id = $workerId;

        return $this;
    }

    /**
     * Get workerId
     *
     * @return integer
     */
    public function getWorkerId()
    {
        return $this->worker_id;
    }
}
