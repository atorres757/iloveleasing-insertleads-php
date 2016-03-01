<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing LeadManagement
 * 
 * @XmlRoot("LeadManagement")
 */
class LeadManagement
{

    /**
     * @SerializedName("Prospects")
     * 
     * @property \ILoveLeasing\XmlData\Prospects $prospects
     */
    private $prospects = null;

    /**
     * Gets as prospects
     *
     * @return \ILoveLeasing\XmlData\Prospects
     */
    public function getProspects()
    {
        return $this->prospects;
    }

    /**
     * Sets a new prospects
     *
     * @param \ILoveLeasing\XmlData\Prospects $prospects
     * @return self
     */
    public function setProspects(\ILoveLeasing\XmlData\Prospects $prospects)
    {
        $this->prospects = $prospects;
        return $this;
    }


}

