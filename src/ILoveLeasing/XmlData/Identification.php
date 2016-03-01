<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing Identification
 */
class Identification
{
    const PROPERTY_ID = 'PropertyID';
    const PROPERTY_NAME = 'PropertyName';

    /**
     * @SerializedName("IDType")
     * @XmlAttribute
     * 
     * @property string $iDType
     */
    private $iDType = null;

    /**
     * @SerializedName("IDValue")
     * @XmlAttribute
     * 
     * @property mixed $iDValue
     */
    private $iDValue = null;

    /**
     * Gets as iDType
     *
     * @return string
     */
    public function getIDType()
    {
        return $this->iDType;
    }

    /**
     * Sets a new iDType
     *
     * @param string $iDType
     * @return self
     */
    public function setIDType($iDType)
    {
        $this->iDType = $iDType;
        return $this;
    }

    /**
     * Gets as iDValue
     *
     * @return mixed
     */
    public function getIDValue()
    {
        return $this->iDValue;
    }

    /**
     * Sets a new iDValue
     *
     * @param mixed $iDValue
     * @return self
     */
    public function setIDValue($iDValue)
    {
        $this->iDValue = $iDValue;
        return $this;
    }


}

