<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class representing Prospect
 */
class Prospect
{

    /**
     * @SerializedName("CustomerPreferences")
     * 
     * @property \ILoveLeasing\XmlData\CustomerPreferences $customerPreferences
     */
    private $customerPreferences = null;

    /**
     * @XmlList(inline = true, entry = "Customers")
     * 
     * @property \ILoveLeasing\XmlData\Customers[] $customers
     */
    private $customers = null;

    /**
     * @XmlList(inline = true, entry = "Events")
     * 
     * @property \ILoveLeasing\XmlData\Events[] $events
     */
    private $events = null;

    /**
     * isset customerPreferences
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerPreferences($index)
    {
        return isset($this->customerPreferences[$index]);
    }

    /**
     * unset customerPreferences
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerPreferences($index)
    {
        unset($this->customerPreferences[$index]);
    }

    /**
     * Gets as customerPreferences
     *
     * @return \ILoveLeasing\XmlData\CustomerPreferences
     */
    public function getCustomerPreferences()
    {
        return $this->customerPreferences;
    }

    /**
     * Sets a new customerPreferences
     *
     * @param \ILoveLeasing\XmlData\CustomerPreferences $customerPreferences
     * @return self
     */
    public function setCustomerPreferences(\ILoveLeasing\XmlData\CustomerPreferences $customerPreferences)
    {
        $this->customerPreferences = $customerPreferences;
        return $this;
    }

    /**
     * Adds as customers
     *
     * @return self
     * @param \ILoveLeasing\XmlData\Customers $customers
     */
    public function addToCustomers(\ILoveLeasing\XmlData\Customers $customers)
    {
        $this->customers[] = $customers;
        return $this;
    }

    /**
     * isset customers
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomers($index)
    {
        return isset($this->customers[$index]);
    }

    /**
     * unset customers
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomers($index)
    {
        unset($this->customers[$index]);
    }

    /**
     * Gets as customers
     *
     * @return \ILoveLeasing\XmlData\Customers[]
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * Sets a new customers
     *
     * @param \ILoveLeasing\XmlData\Customers[] $customers
     * @return self
     */
    public function setCustomers(array $customers)
    {
        $this->customers = $customers;
        return $this;
    }

    /**
     * Adds as events
     *
     * @return self
     * @param \ILoveLeasing\XmlData\Events $events
     */
    public function addToEvents(\ILoveLeasing\XmlData\Events $events)
    {
        $this->events[] = $events;
        return $this;
    }

    /**
     * isset events
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEvents($index)
    {
        return isset($this->events[$index]);
    }

    /**
     * unset events
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEvents($index)
    {
        unset($this->events[$index]);
    }

    /**
     * Gets as events
     *
     * @return \ILoveLeasing\XmlData\Events[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets a new events
     *
     * @param \ILoveLeasing\XmlData\Events[] $events
     * @return self
     */
    public function setEvents(array $events)
    {
        $this->events = $events;
        return $this;
    }


}

