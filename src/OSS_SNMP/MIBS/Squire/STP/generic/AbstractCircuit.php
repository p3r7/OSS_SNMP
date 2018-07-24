<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, (Voice) Circuit resource (SS7 ISDNUP)
 */
abstract class AbstractCircuit extends \OSS_SNMP\MIB
{
    const OID_BASE = '';

	const OID_STATUS = '';
	const OID_FLAGS = '';
	const OID_TYPE = '';
	const OID_MAP = '';
	const OID_INTERFACE = '';
	const OID_CIC = '';
	const OID_CONTROLLING = '';
	const OID_ACTUAL_CONTROLLING = '';
	const OID_DIRECTION = '';
	const OID_TIMESLOT = '';
	const OID_CIRCUITGROUP = '';
	const OID_PARTNER = '';
	const OID_STACK = '';
	const OID_CALLCONTROL = '';
	const OID_DCALL = '';
	const OID_DATALINK = '';
	const OID_CC_STATUS = ''; // LOAD
	const OID_INITIALISE = '';
	const OID_BLOCK_STATE = '';
	const OID_IN_SERVICE = '';
	const OID_OUT_SERVICE = '';
	const OID_DESCRIPTION = '';
	const OID_OPTIONS = '';

    /**
     * Returns the status of the Circuit
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get(static::OID_BASE . '.' . static::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Circuit
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description ($resourceId)
    {
        return $this->getSNMP()->get(static::OID_BASE . '.' . static::OID_DESCRIPTION . '.' . $resourceId);
    }

	/**
     * Returns the Circuit Identification Code associated with the Circuit resource declaration
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function cic ($resourceId)
    {
        return $this->getSNMP()->get(static::OID_BASE . '.' . static::OID_CIC . '.' . $resourceId);
    }

    public function used ($resourceId)
    {
        /**
         * Returns whether the Circuit resource is used or not
         *
         * @param $resourceId
         * @return string The label of the resource
         */

        $ccStatus = $this->getSNMP()->get(static::OID_BASE . '.' . static::OID_CC_STATUS . '.' . $resourceId);

        return ($ccStatus !== 'CC_IDLE');
    }
}
