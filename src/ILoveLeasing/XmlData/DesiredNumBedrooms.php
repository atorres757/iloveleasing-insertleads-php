<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing DesiredNumBedrooms
 */
class DesiredNumBedrooms
{

    /**
     * @SerializedName("Exact")
     * @XmlAttribute
     * 
     * @property integer $exact
     */
    private $exact = null;

    /**
     * @SerializedName("Max")
     * @XmlAttribute
     * 
     * @property integer $max
     */
    private $max = null;

    /**
     * @SerializedName("Min")
     * @XmlAttribute
     * 
     * @property integer $min
     */
    private $min = null;

    /**
     * Gets as exact
     *
     * @return integer
     */
    public function getExact()
    {
        return $this->exact;
    }

    /**
     * Sets a new exact
     *
     * @param integer $exact
     * @return self
     */
    public function setExact($exact)
    {
        $this->exact = $exact;
        return $this;
    }

    /**
     * Gets as max
     *
     * @return integer
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * @param integer $max
     * @return self
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Gets as min
     *
     * @return integer
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * @param integer $min
     * @return self
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }


}

