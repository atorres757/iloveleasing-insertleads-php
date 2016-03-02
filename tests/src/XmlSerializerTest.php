<?php

use ILoveLeasing\XmlSerializer;
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
use ILoveLeasing\Lead;
use ILoveLeasing\LeadMapper;


class XmlSerializerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test to verify php objects serialize and pass xsd.
     */
    public function testXmlSerializerWithAllData()
    {
        // customer preference
        $customerPref = new CustomerPreferences();
        $customerPref->setDesiredFloorplan("Test Plan");
        $customerPref->setDesiredLeaseTerms("6 Months");
        $customerPref->setNumberOfOccupants(1);
        $customerPref->setTargetMoveInDate("2016-02-24");
        
        $comment = new Comment("Guestcard comment");
        $customerPref->addToComment($comment);
        
        $desBeds = new DesiredNumBedrooms();
        $desBeds->setExact(3)->setMin(3)->setMax(3);
        $customerPref->setDesiredNumBedrooms($desBeds);
        
        $desRent = new DesiredRent();
        $desRent->setExact(500)->setMax(500)->setMin(500);
        $customerPref->setDesiredRent($desRent);
        
        $desUnit = new DesiredUnit();
        $desUnit->setMarketingName("NA");
        $customerPref->setDesiredUnit($desUnit);
        
        // customer
        $customer = new Customer();
        $name = new Name();
        $name->setFirstName("John");
        $name->setLastName("Doe");
        $customer->setName($name);
        
        $phone = new Phone();
        $phone->setPhoneType("home");
        $phone->setPhoneNumber("7579999999");
        $customer->addToPhone($phone);
        
        $customer->setEmail("prospect@bogus.tld");
        
        $propId = new Identification();
        $propId->setIDType(Identification::PROPERTY_ID);
        $propId->setIDValue("999000999");
        $customer->addToIdentification($propId);
        
        $propName = new Identification();
        $propName->setIDType(Identification::PROPERTY_NAME);
        $propName->setIDValue("Test Property");
        $customer->addToIdentification($propName);
        
        $address = new Address();
        $address->setAddressType(Address::TYPE_CURRENT);
        $address->setAddressLine1("123 Testing St.");
        $address->setCity("Norfolk");
        $address->setState("VA");
        $address->setPostalCode("23510");
        $customer->addToAddress($address);
        
        // event
        $events = new Events();
        $event = new Event();
        $event->setEventType(Event::TYPE_EMAIL_FROM_PROSPECT);
        $event->setEventDate("2016-02-25");
        $events->setEvent($event);
        
        $agent = new Agent();
        $agentName = new AgentName();
        $agentName->setFirstName("Sally");
        $agentName->setLastName("Sales");
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
        
        $serializer = new XmlSerializer();
        $leadXml = $serializer->serialize($leadManage);
        
        // uncomment to debug xml
        //file_put_contents(realpath(dirname(__FILE__)) . "/" . __METHOD__ . ".debug.xml", $leadXml);
        
        $this->validateXml($leadXml);
    }
    
    /**
     * Test xml validation against required fields
     */
    public function testXmlSerializerWithLimitedLeadData()
    {
        $lead = new Lead();
        $lead->firstName = "Allen";
        $lead->lastName = "Torres";
        $lead->email = "someemail@bogus.tld";
        $lead->maxBeds = 2;
        $lead->maxPrice = 1000;
        $lead->targetMoveInDate = "2016-03-15";
        $lead->comment = "testing";
        $lead->homePhone = "7571231212";
        $lead->submitDate = "2016-02-01";
        $lead->propertyId = "999000999";
        $lead->propertyName = "Test Property";
        
        $mapper = new LeadMapper();
        $leadManage = new LeadManagement();
        $leadManage = $mapper->leadToLeadManagement($lead);
        
        $serializer = new XmlSerializer();
        $leadXml = $serializer->serialize($leadManage);
        
        // uncomment to debug xml
        //file_put_contents(realpath(dirname(__FILE__)) . "/" . __METHOD__ . ".debug.xml", $leadXml);
        
        $this->validateXml($leadXml);
    }
    
    /**
     * Helper function to validate xml against an xsd
     * 
     * @param string $xml
     */
    public function validateXml($xml)
    {
        $doc = new \DOMDocument();
        $leadDoc = simplexml_load_string($xml);
        
        $doc->loadXML($leadDoc->asXML());
        $this->assertTrue(
            $doc->schemaValidate(
                realpath(dirname(__FILE__) . "/../xsd")."/iloveleasing-insertleads-xmldata.xsd"
                ),
            true
            );
    }

}
