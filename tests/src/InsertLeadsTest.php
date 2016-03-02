<?php

use ILoveLeasing\Lead;
use ILoveLeasing\InsertLeadRequest;
use ILoveLeasing\InsertLeads;

class InsertLeadsTest extends PHPUnit_Framework_TestCase
{
    
    public function testInsertLeadsRequest()
    {
        $lead = new Lead();
        $lead->firstName = "John";
        $lead->lastName = "Doe";
        $lead->email = "someemail@bogus.tld";
        $lead->maxBeds = 2;
        $lead->maxPrice = 1000;
        $lead->targetMoveInDate = "2016-03-15";
        $lead->comment = "testing";
        $lead->homePhone = "7571231212";
        $lead->submitDate = "2016-02-01";
        $lead->propertyId = "999000999";
        $lead->propertyName = "Test Property";
        
        $request = new InsertLeadRequest();
        $request->setLead($lead);
        
        try {
            // provided by ILoveLeasing
            $request->username = "username";
            $request->password = "password";
            $request->sourceID = "sourceId";
            
            $service = new InsertLeads();
            $res = $service->InsertLead($request);
            
            $this->assertEquals('<result success="false">Invalid Authentication</result>', $res->InsertLeadResult, 'Insert result');
            
        } catch (SoapFault $sf) {
            
            $this->assertEquals('', $sf->getMessage(), 'Soap fault');
            
        } catch (Exception $ex) {
            
            $this->assertEquals('', $ex->getMessage(), 'Exception');
            
        }
    }
}