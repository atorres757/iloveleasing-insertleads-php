<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing Customers
 */
class Customers
{

    /**
     * @SerializedName("Customer")
     * 
     * @property \ILoveLeasing\XmlData\Customer $customer
     */
    private $customer = null;

    /**
     * Gets as customer
     *
     * @return \ILoveLeasing\XmlData\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * @param \ILoveLeasing\XmlData\Customer $customer
     * @return self
     */
    public function setCustomer(\ILoveLeasing\XmlData\Customer $customer)
    {
        $this->customer = $customer;
        return $this;
    }


}

