<?php

namespace ILoveLeasing\XmlData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class representing CustomerPreferences
 */
class CustomerPreferences
{

    /**
     * @SerializedName("TargetMoveInDate")
     * 
     * @property string $targetMoveInDate
     */
    private $targetMoveInDate = null;

    /**
     * @SerializedName("DesiredFloorplan")
     * 
     * @property string $desiredFloorplan
     */
    private $desiredFloorplan = null;

    /**
     * @SerializedName("DesiredUnit")
     * 
     * @property \ILoveLeasing\XmlData\DesiredUnit $desiredUnit
     */
    private $desiredUnit = null;

    /**
     * @SerializedName("DesiredRent")
     * 
     * @property \ILoveLeasing\XmlData\DesiredRent $desiredRent
     */
    private $desiredRent = null;

    /**
     * @SerializedName("DesiredNumBedrooms")
     * 
     * @property \ILoveLeasing\XmlData\DesiredNumBedrooms $desiredNumBedrooms
     */
    private $desiredNumBedrooms = null;

    /**
     * @SerializedName("DesiredLeaseTerms")
     * 
     * @property string $desiredLeaseTerms
     */
    private $desiredLeaseTerms = null;

    /**
     * @SerializedName("NumberOfOccupants")
     * 
     * @property integer $numberOfOccupants
     */
    private $numberOfOccupants = null;

    /**
     * @XmlList(inline = true, entry = "Comment")
     * 
     * @property string[] $comment
     */
    private $comment = null;

    /**
     * Gets as targetMoveInDate
     *
     * @return string
     */
    public function getTargetMoveInDate()
    {
        return $this->targetMoveInDate;
    }

    /**
     * Sets a new targetMoveInDate
     *
     * @param string $targetMoveInDate
     * @return self
     */
    public function setTargetMoveInDate($targetMoveInDate)
    {
        $this->targetMoveInDate = $targetMoveInDate;
        return $this;
    }

    /**
     * Gets as desiredFloorplan
     *
     * @return string
     */
    public function getDesiredFloorplan()
    {
        return $this->desiredFloorplan;
    }

    /**
     * Sets a new desiredFloorplan
     *
     * @param string $desiredFloorplan
     * @return self
     */
    public function setDesiredFloorplan($desiredFloorplan)
    {
        $this->desiredFloorplan = $desiredFloorplan;
        return $this;
    }

    /**
     * Gets as desiredUnit
     *
     * @return \ILoveLeasing\DesiredUnit
     */
    public function getDesiredUnit()
    {
        return $this->desiredUnit;
    }

    /**
     * Sets a new desiredUnit
     *
     * @param \ILoveLeasing\DesiredUnit $desiredUnit
     * @return self
     */
    public function setDesiredUnit(\ILoveLeasing\XmlData\DesiredUnit $desiredUnit)
    {
        $this->desiredUnit = $desiredUnit;
        return $this;
    }

    /**
     * Gets as desiredRent
     *
     * @return \ILoveLeasing\DesiredRent
     */
    public function getDesiredRent()
    {
        return $this->desiredRent;
    }

    /**
     * Sets a new desiredRent
     *
     * @param \ILoveLeasing\DesiredRent $desiredRent
     * @return self
     */
    public function setDesiredRent(\ILoveLeasing\XmlData\DesiredRent $desiredRent)
    {
        $this->desiredRent = $desiredRent;
        return $this;
    }

    /**
     * Gets as desiredNumBedrooms
     *
     * @return \ILoveLeasing\DesiredNumBedrooms
     */
    public function getDesiredNumBedrooms()
    {
        return $this->desiredNumBedrooms;
    }

    /**
     * Sets a new desiredNumBedrooms
     *
     * @param \ILoveLeasing\DesiredNumBedrooms $desiredNumBedrooms
     * @return self
     */
    public function setDesiredNumBedrooms(\ILoveLeasing\XmlData\DesiredNumBedrooms $desiredNumBedrooms)
    {
        $this->desiredNumBedrooms = $desiredNumBedrooms;
        return $this;
    }

    /**
     * Gets as desiredLeaseTerms
     *
     * @return string
     */
    public function getDesiredLeaseTerms()
    {
        return $this->desiredLeaseTerms;
    }

    /**
     * Sets a new desiredLeaseTerms
     *
     * @param string $desiredLeaseTerms
     * @return self
     */
    public function setDesiredLeaseTerms($desiredLeaseTerms)
    {
        $this->desiredLeaseTerms = $desiredLeaseTerms;
        return $this;
    }

    /**
     * Gets as numberOfOccupants
     *
     * @return integer
     */
    public function getNumberOfOccupants()
    {
        return $this->numberOfOccupants;
    }

    /**
     * Sets a new numberOfOccupants
     *
     * @param integer $numberOfOccupants
     * @return self
     */
    public function setNumberOfOccupants($numberOfOccupants)
    {
        $this->numberOfOccupants = $numberOfOccupants;
        return $this;
    }

    /**
     * Adds as comment
     *
     * @return self
     * @param string $comment
     */
    public function addToComment($comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * @return string[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param string $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

