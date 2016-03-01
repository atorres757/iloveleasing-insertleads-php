<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing Events
 */
class Events
{

    /**
     * @SerializedName("Event")
     * 
     * @property \ILoveLeasing\XmlData\Event $event
     */
    private $event = null;

    /**
     * Gets as event
     *
     * @return \ILoveLeasing\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * @param \ILoveLeasing\Event $event
     * @return self
     */
    public function setEvent(\ILoveLeasing\XmlData\Event $event)
    {
        $this->event = $event;
        return $this;
    }


}

