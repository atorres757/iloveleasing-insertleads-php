<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing Event
 */
class Event
{
    
    const TYPE_EMAIL_FROM_PROSPECT = 'EmailFromProspect';
    const TYPE_CALL_FROM_PROSPECT = 'CallFromProspect';

    /**
     * @XmlAttribute
     * @SerializedName("EventDate")
     * 
     * @property mixed $eventDate
     */
    private $eventDate = null;

    /**
     * @XmlAttribute
     * @SerializedName("EventType")
     * 
     * @property string $eventType
     */
    private $eventType = null;

    /**
     * @XmlList(inline = true, entry = "Agent")
     * 
     * @property \ILoveLeasing\XmlData\Agent[] $agent
     */
    private $agent = null;

    /**
     * @SerializedName("FirstContact")
     * 
     * @property boolean[] $firstContact
     */
    private $firstContact = null;

    /**
     * Gets as eventDate
     *
     * @return mixed
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Sets a new eventDate
     *
     * @param mixed $eventDate
     * @return self
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * Gets as eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets a new eventType
     *
     * @param string $eventType
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * Adds as agent
     *
     * @return self
     * @param \ILoveLeasing\Agent $agent
     */
    public function addToAgent(\ILoveLeasing\XmlData\Agent $agent)
    {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * isset agent
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAgent($index)
    {
        return isset($this->agent[$index]);
    }

    /**
     * unset agent
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAgent($index)
    {
        unset($this->agent[$index]);
    }

    /**
     * Gets as agent
     *
     * @return \ILoveLeasing\Agent[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Sets a new agent
     *
     * @param \ILoveLeasing\Agent[] $agent
     * @return self
     */
    public function setAgent(array $agent)
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * Adds as firstContact
     *
     * @return self
     * @param boolean $firstContact
     */
    public function addToFirstContact($firstContact)
    {
        $this->firstContact[] = $firstContact;
        return $this;
    }

    /**
     * isset firstContact
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFirstContact($index)
    {
        return isset($this->firstContact[$index]);
    }

    /**
     * unset firstContact
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFirstContact($index)
    {
        unset($this->firstContact[$index]);
    }

    /**
     * Gets as firstContact
     *
     * @return boolean[]
     */
    public function getFirstContact()
    {
        return $this->firstContact;
    }

    /**
     * Sets a new firstContact
     *
     * @param boolean $firstContact
     * @return self
     */
    public function setFirstContact(array $firstContact)
    {
        $this->firstContact = $firstContact;
        return $this;
    }


}

