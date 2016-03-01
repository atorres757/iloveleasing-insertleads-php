<?php
/**
 * InsertLead.
 *
 * @package ILoveLeasing
 */
namespace ILoveLeasing;

use ILoveLeasing\Lead;
use ILoveLeasing\LeadMapper;
use ILoveLeasing\XmlSerializer;

/**
 * Insert Lead Object.
 */
class InsertLeadRequest
{

    /**
     * Username.
     * 
     * @var string
     */
    public $username;

    /**
     * Password.
     * 
     * @var string
     */
    public $password;

    /**
     * XML Data.
     * 
     * @var string
     */
    private $XML_DATA;

    /**
     * Source ID.
     * 
     * @var long
     */
    public $sourceID;
    
    /**
     * 
     * @param ILoveLeasing\Lead $lead
     */
    public function setLead(Lead $lead)
    {
        $mapper = new LeadMapper();
        $leadManage = $mapper->leadToLeadManagement($lead);
        $serializer = new XmlSerializer();
        $this->XML_DATA = $serializer->serialize($leadManage);
    }
}
