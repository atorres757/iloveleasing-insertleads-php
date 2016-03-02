<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * Class representing Address
 */
class Address
{
    const TYPE_CURRENT = "current";

    /**
     * @SerializedName("AddressType")
     * @XmlAttribute
     * 
     * @property string $addressType
     */
    private $addressType = null;

    /**
     * @SerializedName("AddressLine1")
     * 
     * @property string $addressLine1
     */
    private $addressLine1 = null;

    /**
     * @SerializedName("City")
     * 
     * @property string $city
     */
    private $city = null;

    /**
     * @SerializedName("State")
     * 
     * @property string $state
     */
    private $state = null;

    /**
     * @SerializedName("PostalCode")
     * 
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * Gets as addressType
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Sets a new addressType
     *
     * @param string $addressType
     * @return self
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        return $this;
    }

    /**
     * Gets as addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Sets a new addressLine1
     *
     * @param string $addressLine1
     * @return self
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }


}

