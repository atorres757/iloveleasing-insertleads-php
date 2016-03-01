<?php
namespace ILoveLeasing;

class Lead
{

    /**
     * First Name.
     * 
     * @var string
     */
    public $firstName;
    
    /**
     * Last Name.
     *
     * @var string
     */
    public $lastName;
    
    /**
     * Email address.
     *
     * @var string
     */
    public $email;
    
    /**
     * Home Phone.
     *
     * @var string
     */
    public $homePhone;
    
    /**
     * Cell Phone.
     *
     * @var string
     */
    public $cellPhone;
    
    /**
     * Office Phone.
     *
     * @var string
     */
    public $officePhone;
    
    /**
     * Street Address.
     *
     * @var string
     */
    public $street;
    
    /**
     * City Name.
     *
     * @var string
     */
    public $city;
    
    /**
     * State Code ex: VA.
     *
     * @var string
     */
    public $stateCode;
    
    /**
     * Postal Code.
     *
     * @var string
     */
    public $postalCode;
    
    /**
     * Desired Floor Plan Name.
     * 
     * @var string
     */
    public $desiredFloorplan;
    
    /**
     * Desired Unit Name.
     *
     * @var string
     */
    public $desiredUnitName;
    
    /**
     * Desired Floor Plan Name ex: 6 Months.
     *
     * @var string
     */
    public $desiredLeaseTerms;
    
    /**
     * Number of occupants.
     *
     * @var integer
     */
    public $numberOfOccupants;
    
    /**
     * Target Move In Date ex: YYYY-MM-DD.
     *
     * @var string
     */
    public $targetMoveInDate;
    
    /**
     * Minimum Beds.
     *
     * @var integer
     */
    public $minBeds;
    
    /**
     * Max Beds.
     *
     * @var integer
     */
    public $maxBeds;
    
    /**
     * Minimum Price.
     *
     * @var float
     */
    public $minPrice;
    
    /**
     * Max Price.
     *
     * @var float
     */
    public $maxPrice;
    
    /**
     * Property Identifier.
     * 
     * @var string
     */
    public $propertyId;

    /**
     * Property Name.
     *
     * @var string
     */
    public $propertyName;

    /**
     * Agent First Name.
     *
     * @var string
     */
    public $agentFirstName;

    /**
     * Agent Last Name.
     *
     * @var string
     */
    public $agentLastName;

    /**
     * Comments.
     *
     * @var string
     */
    public $comment;
    
    /**
     * Submit Date ex: YYYY-MM-DD
     * 
     * @var string
     */
    public $submitDate;
}