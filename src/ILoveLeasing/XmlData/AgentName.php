<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing AgentName
 */
class AgentName
{

    /**
     * @SerializedName("FirstName")
     * 
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @SerializedName("LastName")
     * 
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }


}

