<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * Class representing Phone
 */
class Phone
{
    const TYPE_HOME = "home";
    const TYPE_CELL = "cell";
    const TYPE_OFFICE = "office";

    /**
     * @XmlAttribute
     * @SerializedName("PhoneType")
     * 
     * @property string $phoneType
     */
    private $phoneType = self::TYPE_HOME;

    /**
     * @SerializedName("PhoneNumber")
     * 
     * @property string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * Gets as phoneType
     *
     * @return string
     */
    public function getPhoneType()
    {
        return $this->phoneType;
    }

    /**
     * Sets a new phoneType
     *
     * @param string $phoneType
     * @return self
     */
    public function setPhoneType($phoneType)
    {
        $this->phoneType = $phoneType;
        return $this;
    }

    /**
     * Gets as phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}

