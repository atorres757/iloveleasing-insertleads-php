<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing DesiredUnit
 */
class DesiredUnit
{

    /**
     * @SerializedName("MarketingName")
     * 
     * @property integer $marketingName
     */
    private $marketingName = null;

    /**
     * Gets as marketingName
     *
     * @return integer
     */
    public function getMarketingName()
    {
        return $this->marketingName;
    }

    /**
     * Sets a new marketingName
     *
     * @param integer $marketingName
     * @return self
     */
    public function setMarketingName($marketingName)
    {
        $this->marketingName = $marketingName;
        return $this;
    }


}

