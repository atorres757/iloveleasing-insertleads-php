<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing Agent
 */
class Agent
{

    /**
     * @SerializedName("AgentName")
     * 
     * @property \ILoveLeasing\AgentName $agentName
     */
    private $agentName = null;

    /**
     * Gets as agentName
     *
     * @return \ILoveLeasing\XmlData\AgentName
     */
    public function getAgentName()
    {
        return $this->agentName;
    }

    /**
     * Sets a new agentName
     *
     * @param \ILoveLeasing\AgentName $agentName
     * @return self
     */
    public function setAgentName(\ILoveLeasing\XmlData\AgentName $agentName)
    {
        $this->agentName = $agentName;
        return $this;
    }


}

