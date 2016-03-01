<?php

use ILoveLeasing\LeadMapper;
use ILoveLeasing\Lead;
use ILoveLeasing\XmlData\LeadManagement;

class LeadMapperTest extends PHPUnit_Framework_TestCase
{
    public function testLeadMapping()
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
        
        $mapper = new LeadMapper();
        $leadManage = new LeadManagement();
        $leadManage = $mapper->leadToLeadManagement($lead);
        
        $customer = $leadManage
            ->getProspects()
            ->getProspect()
            ->getCustomers()[0]->getCustomer();
        $this->assertEquals(
            $lead->firstName, 
            $customer->getName()->getFirstName()
        );
        $this->assertEquals(
            $lead->lastName,
            $customer->getName()->getLastName()
        );
        $this->assertEquals(
            $lead->email,
            $customer->getEmail()
        );
        
        $homePhone = $customer->getPhone()[0];
        $this->assertEquals(
            $lead->homePhone, 
            $homePhone->getPhoneNumber()
        );
        
        $pref = $leadManage
            ->getProspects()
            ->getProspect()
            ->getCustomerPreferences();
        $this->assertEquals(
            $lead->targetMoveInDate,
            $pref->getTargetMoveInDate()
        );
        $this->assertEquals(
            $lead->maxBeds,
            $pref->getDesiredNumBedrooms()->getMax()
        );
        $this->assertEquals(
            $lead->maxPrice,
            $pref->getDesiredRent()->getMax()
        );
        $this->assertEquals(
            $lead->comment,
            $pref->getComment()[0]
        );
        
        $event = $leadManage
            ->getProspects()
            ->getProspect()
            ->getEvents()[0]->getEvent();
        $this->assertEquals(
            $lead->submitDate,
            $event->getEventDate()
        );
    }
}