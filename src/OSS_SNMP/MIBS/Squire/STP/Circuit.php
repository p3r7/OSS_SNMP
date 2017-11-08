<?php

namespace OSS_SNMP\MIBS\Squire\STP;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Circuit resource (SS7 ISDNUP)
 */
class Circuit extends \OSS_SNMP\MIB
{
    const OID_BASE                              = '.1.3.6.1.2.1.2.2.4';

	const OID_STATUS = '.1.3.6.1.2.1.2.2.4.0';
	const OID_FLAGS = '.1.3.6.1.2.1.2.2.4.1';
	const OID_TYPE = '.1.3.6.1.2.1.2.2.4.2';
	const OID_MAP = '.1.3.6.1.2.1.2.2.4.3';
	const OID_INTERFACE = '.1.3.6.1.2.1.2.2.4.4';
	const OID_CIC = '.1.3.6.1.2.1.2.2.4.5';
	const OID_CONTROLLING = '.1.3.6.1.2.1.2.2.4.6';
	const OID_ACTUAL_CONTROLLING = '.1.3.6.1.2.1.2.2.4.7';
	const OID_DIRECTION = '.1.3.6.1.2.1.2.2.4.8';
	const OID_TIMESLOT = '.1.3.6.1.2.1.2.2.4.9';
	const OID_CIRCUITGROUP = '.1.3.6.1.2.1.2.2.4.10';
	const OID_PARTNER = '.1.3.6.1.2.1.2.2.4.11';
	const OID_STACK = '.1.3.6.1.2.1.2.2.4.12';
	const OID_CALLCONTROL = '.1.3.6.1.2.1.2.2.4.13';
	const OID_DCALL = '.1.3.6.1.2.1.2.2.4.14';
	const OID_DATALINK = '.1.3.6.1.2.1.2.2.4.15';
	const OID_CC_STATUS = '.1.3.6.1.2.1.2.2.4.16'; // LOAD
	const OID_INITIALISE = '.1.3.6.1.2.1.2.2.4.17';
	const OID_BLOCK_STATE = '.1.3.6.1.2.1.2.2.4.18';
	const OID_INSERVICE = '.1.3.6.1.2.1.2.2.4.19';
	const OID_OUTSERVICE = '.1.3.6.1.2.1.2.2.4.20';
	const OID_DESCRIPTION = '.1.3.6.1.2.1.2.2.4.21';
	const OID_OPTIONS = '.1.3.6.1.2.1.2.2.4.22';

    const OID_DESCRIPTION_old          = '.1.3.6.1.2.1.2.2.4.21'; // older versions of Squire SVI, up to v8.8.56


    /**
     * Returns the status of the Circuit
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get( self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Circuit
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get( self::OID_DESCRIPTION . '.' . $resourceId);
    }

	/**
     * Returns the Circuit Identification Code associated with the Circuit resource declaration
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function cic($resourceId)
    {
        return $this->getSNMP()->get( self::OID_CIC . '.' . $resourceId);
    }

}
