<?php
namespace ZWayApi\Data;

class Controller extends GenericData
{
    protected $APIVersion; // Version of the Serial API

    protected $SDK; // System development kit version of the Transceiver firmware

    protected $SISPresent; // flase if SUIS is available

    protected $SUCNodeId; // Node ID of SUC if present

    protected $ZWVersion; // ZWave Version (firmware)

    protected $ZWaveChip; // The name of the Z-Wave transceiver chip

    protected $ZWlibMajor; // library version

    protected $ZWlibMinor;

    protected $capabilities; // array of function class ids

    protected $controllerstate; // flag to show inclusion mode etc

    protected $countJobs; // shall job be counted

    protected $curSerialAPIAckTimeout10ms; // timing parameter of serial interface

    protected $curSerialAPIBytetimeout10ms; // timing parameter of serial interface

    protected $homeId; // the home id of the controller

    protected $isinOtherNetworks; // flag to show if controller is real primary if in other network

    protected $isPrimary; // flag to show if controller is primary

    protected $isRealprimary; // flag to show if controller can be primary

    protected $isSUC; // is SUC present

    protected $lastExcludedDevice; // node ID of last excluded device

    protected $lastIncludedDevice; // node ID of last included device

    protected $libType; // library basis type

    protected $manufacturerIS;

    protected $manufacturerProductId;

    protected $manufacturerProductTypeId; // ids to identify the transceiver hardware

    protected $memoryGetAddress;

    protected $memoryGetData;

    protected $nodeId; // own node ID

    protected $nonManagementJobs; // number of non man. jobs

    protected $oldSerialAPIAckTimeout10ms; // default timing parameter of serial interface

    protected $oldSerialAPIBytetimeout10ms; // default timing parameter of serial interface

    protected $softwareRevisonDate; // written by compiler

    protected $softwareRevisionID; // written by compiler

    protected $vendor; // string of hardware vendor
    
    public function getAPIVersion()
    {
        return $this->APIVersion;
    }
    
    public function getSDK()
    {
        return $this->SDK;
    }
    
    public function getSISPresent()
    {
        return $this->SISPresent;
    }
    
    public function getSUCNodeId()
    {
        return $this->sUCNodeId;
    }
    
    public function getZWVersion()
    {
        return $this->ZWVersion;
    }
    
    public function getZWaveChip()
    {
        return $this->zWaveChip;
    }
    
    public function getZWlibMajor()
    {
        return $this->ZWlibMajor;
    }
    
    public function getZWlibMinor()
    {
        return $this->ZWlibMinor;
    }
    
    public function getCapabilities()
    {
        return $this->capabilities;
    }
    
    public function getControllerstate()
    {
        return $this->controllerstate;
    }
    
    public function getCountJobs()
    {
        return $this->countJobs;
    }
    
    public function getCurSerialAPIAckTimeout10ms()
    {
        return $this->curSerialAPIAckTimeout10ms;
    }
    
    public function getCurSerialAPIBytetimeout10ms()
    {
        return $this->curSerialAPIBytetimeout10ms;
    }
    
    public function getHomeId()
    {
        return $this->homeId;
    }
    
    public function getIsinOtherNetworks()
    {
        return $this->isinOtherNetworks;
    }
    
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }
    
    public function getIsRealPrimary()
    {
        return $this->isRealprimary;
    }
    
    public function getIsSUC()
    {
        return $this->isSUC;
    }
    
    public function getLastExcludedDevice()
    {
        return $this->lastExcludedDevice;
    }
    
    public function getLastIncludedDevice()
    {
        return $this->lastIncludedDevice;
    }
    
    public function getLibType()
    {
        return $this->libType;
    }
    
    public function getManufacturerIS()
    {
        return $this->manufacturerIS;
    }
    
    public function getManufacturerProductId()
    {
        return $this->manufacturerProductId;
    }
    
    public function getManufacturerProductTypeId()
    {
        return $this->manufacturerProductTypeId;
    }
    
    public function getMemoryGetAddress()
    {
        return $this->memoryGetAddress;
    }
    
    public function getMemoryGetData()
    {
        return $this->memoryGetData;
    }
    
    public function getNodeId()
    {
        return $this->nodeId;
    }
    
    public function getNonManagementJobs()
    {
        return $this->nonManagementJobs;
    }
    
    public function getOldSerialAPIAckTimeout10ms()
    {
        return $this->oldSerialAPIAckTimeout10ms;
    }
    
    public function getOldSerialAPIBytetimeout10ms()
    {
        return $this->oldSerialAPIBytetimeout10ms;
    }
    
    public function getSoftwareRevisonDate()
    {
        return $this->softwareRevisonDate;
    }
    
    public function getSoftwareRevisionID()
    {
        return $this->softwareRevisionID;
    }
    
    public function getVendor()
    {
        return $this->vendor;
    }
}
