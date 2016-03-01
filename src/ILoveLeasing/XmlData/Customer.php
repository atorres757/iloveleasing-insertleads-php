<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * Class representing Customer
 */
class Customer
{

    /**
     * @SerializedName("Type")
     * @XmlAttribute
     * 
     * @property string $type
     */
    private $type = "prospect";

    /**
     * @XmlList(inline = true, entry = "Address")
     * 
     * @property \ILoveLeasing\XmlData\Address[] $address
     */
    private $address = null;

    /**
     * @SerializedName("Email")
     * 
     * @property string $email
     */
    private $email = null;

    /**
     * @XmlList(inline = true, entry = "Identification")
     * 
     * @property \ILoveLeasing\XmlData\Identification[] $identification
     */
    private $identification = null;

    /**
     * @SerializedName("Name")
     * 
     * @property \ILoveLeasing\XmlData\Name $name
     */
    private $name = null;

    /**
     * @XmlList(inline = true, entry = "Phone")
     * 
     * @property \ILoveLeasing\XmlData\Phone[] $phone
     */
    private $phone = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \ILoveLeasing\Address $address
     */
    public function addToAddress(\ILoveLeasing\XmlData\Address $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * @return \ILoveLeasing\Address[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \ILoveLeasing\Address[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Adds as identification
     *
     * @return self
     * @param \ILoveLeasing\Identification $identification
     */
    public function addToIdentification(\ILoveLeasing\XmlData\Identification $identification)
    {
        $this->identification[] = $identification;
        return $this;
    }

    /**
     * isset identification
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIdentification($index)
    {
        return isset($this->identification[$index]);
    }

    /**
     * unset identification
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIdentification($index)
    {
        unset($this->identification[$index]);
    }

    /**
     * Gets as identification
     *
     * @return \ILoveLeasing\Identification[]
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Sets a new identification
     *
     * @param \ILoveLeasing\Identification[] $identification
     * @return self
     */
    public function setIdentification(array $identification)
    {
        $this->identification = $identification;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return \ILoveLeasing\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \ILoveLeasing\Name $name
     * @return self
     */
    public function setName(\ILoveLeasing\XmlData\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as phone
     *
     * @return self
     * @param \ILoveLeasing\Phone $phone
     */
    public function addToPhone(\ILoveLeasing\XmlData\Phone $phone)
    {
        $this->phone[] = $phone;
        return $this;
    }

    /**
     * isset phone
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPhone($index)
    {
        return isset($this->phone[$index]);
    }

    /**
     * unset phone
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPhone($index)
    {
        unset($this->phone[$index]);
    }

    /**
     * Gets as phone
     *
     * @return \ILoveLeasing\Phone[]
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param \ILoveLeasing\Phone[] $phone
     * @return self
     */
    public function setPhone(array $phone)
    {
        $this->phone = $phone;
        return $this;
    }


}

