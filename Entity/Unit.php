<?php

namespace MESD\Standard\UnitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MESD\Standard\UnitBundle\Entity\Unit
 */
class Unit
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $longName
     */
    private $longName;

    /**
     * @var string $shortName
     */
    private $shortName;

    /**
     * @var boolean $time
     */
    private $time;


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
     * Default __toString.  Customize to suit
     */
    public function __toString()
    {
        return $this->getlongName();
    }


    /**
     * Set longName
     *
     * @param string $longName
     * @return Unit
     */
    public function setLongName($longName)
    {
        $this->longName = $longName;

        return $this;
    }

    /**
     * Get longName
     *
     * @return string
     */
    public function getLongName()
    {
        return $this->longName;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return Unit
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return Unit
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }


}
