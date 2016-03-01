<?php

namespace ILoveLeasing;

use ILoveLeasing\Lead;
use ILoveLeasing\XmlData\CustomerPreferences;
use ILoveLeasing\XmlData\DesiredNumBedrooms;
use ILoveLeasing\XmlData\DesiredRent;
use ILoveLeasing\XmlData\DesiredUnit;
use ILoveLeasing\XmlData\Name;
use ILoveLeasing\XmlData\Phone;
use ILoveLeasing\XmlData\Customer;
use ILoveLeasing\XmlData\Identification;
use ILoveLeasing\XmlData\Address;
use ILoveLeasing\XmlData\Prospect;
use ILoveLeasing\XmlData\Event;
use ILoveLeasing\XmlData\Agent;
use ILoveLeasing\XmlData\AgentName;
use ILoveLeasing\XmlData\Comment;
use ILoveLeasing\XmlData\Customers;
use ILoveLeasing\XmlData\Events;
use ILoveLeasing\XmlData\LeadManagement;
use ILoveLeasing\XmlData\Prospects;

class LeadMapper
{
    /**
     * Maps a Lead object to a LeadManagment object.
     * 
     * @param Lead $lead
     * 
     * @return ILoveLeasing\XmlData\LeadManagement
     */
    public function leadToLeadManagement(Lead $lead)
    {
        // customer preference
        $customerPref = new CustomerPreferences();
        $customerPref->setDesiredFloorplan($lead->desiredFloorplan);
        $customerPref->setDesiredLeaseTerms($lead->desiredLeaseTerms);
        $customerPref->setNumberOfOccupants($lead->numberOfOccupants);
        $customerPref->setTargetMoveInDate($lead->targetMoveInDate);
        
        $comment = new Comment($lead->comment);
        $customerPref->addToComment($comment);
        
        $desBeds = new DesiredNumBedrooms();
        $desBeds->setMin($lead->minBeds)->setMax($lead->maxBeds);
        $customerPref->setDesiredNumBedrooms($desBeds);
        
        $desRent = new DesiredRent();
        $desRent->setMax($lead->maxPrice)->setMin($lead->minPrice);
        $customerPref->setDesiredRent($desRent);
        
        $desUnit = new DesiredUnit();
        $desUnit->setMarketingName($lead->desiredUnitName);
        $customerPref->setDesiredUnit($desUnit);
        
        // customer
        $customer = new Customer();
        $name = new Name();
        $name->setFirstName($lead->firstName);
        $name->setLastName($lead->lastName);
        $customer->setName($name);
        
        foreach (array(Phone::TYPE_HOME, Phone::TYPE_OFFICE, Phone::TYPE_CELL) as $ph) {
            if (isset($lead->{$ph . "Phone"}) && !empty($lead->{$ph . "Phone"})) {
                $phone = new Phone();
                $phone->setPhoneType($ph);
                $phone->setPhoneNumber($lead->{$ph . "Phone"});
                $customer->addToPhone($phone);
            }
        }
        
        $customer->setEmail($lead->email);
        
        $propId = new Identification();
        $propId->setIDType(Identification::PROPERTY_ID);
        $propId->setIDValue($lead->propertyId);
        $customer->addToIdentification($propId);
        
        $propName = new Identification();
        $propName->setIDType(Identification::PROPERTY_NAME);
        $propName->setIDValue($lead->propertyName);
        $customer->addToIdentification($propName);
        
        $address = new Address();
        $address->setAddressLine1($lead->street);
        $address->setCity($lead->city);
        $address->setState($lead->stateCode);
        $address->setPostalCode($lead->postalCode);
        $customer->addToAddress($address);
        
        // event
        $events = new Events();
        $event = new Event();
        $event->setEventType(Event::TYPE_EMAIL_FROM_PROSPECT);
        $event->setEventDate($lead->submitDate);
        $events->setEvent($event);
        
        $agent = new Agent();
        $agentName = new AgentName();
        $agentName->setFirstName($lead->agentFirstName);
        $agentName->setLastName($lead->agentLastName);
        $agent->setAgentName($agentName);
        $event->addToAgent($agent);
        
        // propspect
        $prospect = new Prospect();
        $prospect->setCustomerPreferences($customerPref);
        
        $customers = new Customers();
        $customers->setCustomer($customer);
        $prospect->addToCustomers($customers);
        $prospect->addToEvents($events);
        
        // lead management
        $leadManage = new LeadManagement();
        $prospects = new Prospects();
        $leadManage->setProspects($prospects->setProspect($prospect));
        
        return $leadManage;
    }
}