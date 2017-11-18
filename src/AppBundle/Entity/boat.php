<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="boat")
*/
class boat
{

/**
* @ORM\Column(type="string", length=255)
*/
	private $arrival_date;

/**
* @ORM\Column(type="string", length=255)
*/
	private $delivery_date;

/**
* @ORM\Column(type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
	private $id;

/**
* @ORM\Column(type="integer", length=11)
*/
	private $length;

/**
* @ORM\Column(type="string", length=255)
*/
	private $name;

/**
* @ORM\Column(type="string", length=255)
*/
	private $photo;

/**
* @ORM\Column(type="string", length=255)
*/
	private $type;

/**
* @ORM\Column(type="text")
*/
	private $work_description;

    /**
     * Set arrivalDate
     *
     * @param string $arrivalDate
     *
     * @return boat
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrival_date = $arrivalDate;

        return $this;
    }

    /**
     * Get arrivalDate
     *
     * @return string
     */
    public function getArrivalDate()
    {
        return $this->arrival_date;
    }

    /**
     * Set deliveryDate
     *
     * @param string $deliveryDate
     *
     * @return boat
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->delivery_date = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
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
     * Set length
     *
     * @param integer $length
     *
     * @return boat
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return boat
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return boat
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return boat
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set workDescription
     *
     * @param string $workDescription
     *
     * @return boat
     */
    public function setWorkDescription($workDescription)
    {
        $this->work_description = $workDescription;

        return $this;
    }

    /**
     * Get workDescription
     *
     * @return string
     */
    public function getWorkDescription()
    {
        return $this->work_description;
    }
}
