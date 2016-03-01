<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing Prospects
 */
class Prospects
{

    /**
     * @SerializedName("Prospect")
     * 
     * @property \ILoveLeasing\XmlData\Prospect $prospect
     */
    private $prospect = null;

    /**
     * Gets as prospect
     *
     * @return \ILoveLeasing\XmlData\Prospect
     */
    public function getProspect()
    {
        return $this->prospect;
    }

    /**
     * Sets a new prospect
     *
     * @param \ILoveLeasing\XmlData\Prospect $prospect
     * @return self
     */
    public function setProspect(\ILoveLeasing\XmlData\Prospect $prospect)
    {
        $this->prospect = $prospect;
        return $this;
    }


}

