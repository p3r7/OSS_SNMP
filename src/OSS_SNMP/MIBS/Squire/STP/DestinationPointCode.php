<?php

namespace OSS_SNMP\MIBS\Squire\STP;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Destination Point Code resource (SS7 MTP Level 3)
 */
class DestinationPointCode extends \OSS_SNMP\MIB
{
    const OID_BASE                              = '.1.3.6.1.2.1.2.2.7';

	const OID_STATUS = '.1.3.6.1.2.1.2.2.7.0';
	const OID_FLAGS = '.1.3.6.1.2.1.2.2.7.1';
	const OID_TYPE = '.1.3.6.1.2.1.2.2.7.2';
	const OID_ORIGINATING = '.1.3.6.1.2.1.2.2.7.3';
	const OID_POINTCODE = '.1.3.6.1.2.1.2.2.7.4';
	const OID_NI = '.1.3.6.1.2.1.2.2.7.5';
	const OID_PRIMARY = '.1.3.6.1.2.1.2.2.7.6';
	const OID_SECONDARY = '.1.3.6.1.2.1.2.2.7.7';
	const OID_LOADSHARE = '.1.3.6.1.2.1.2.2.7.8';
	const OID_TRANSFER_REPORT = '.1.3.6.1.2.1.2.2.7.9';
	const OID_ADD_TRANSFER_REPORT = '.1.3.6.1.2.1.2.2.7.10';
	const OID_INSERVICE = '.1.3.6.1.2.1.2.2.7.11';
	const OID_OUTSERVICE = '.1.3.6.1.2.1.2.2.7.12';
	const OID_SLS = '.1.3.6.1.2.1.2.2.7.13';
	const OID_CLINK = '.1.3.6.1.2.1.2.2.7.14';
	const OID_DESCRIPTION = '.1.3.6.1.2.1.2.2.7.15';
	const OID_MAX_MSG_PER_SECOND = '.1.3.6.1.2.1.2.2.7.16';
	const OID_MSG_PER_SECOND = '.1.3.6.1.2.1.2.2.7.17';
	const OID_R_QUE = '.1.3.6.1.2.1.2.2.7.18';
	const OID_OPTIONS = '.1.3.6.1.2.1.2.2.7.19';


    /**
     * Returns the status of the Destination Point Code
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get( self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Destination Point Code
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get( self::OID_DESCRIPTION . '.' . $resourceId);
    }

	/**
     * Returns the Point Code associated with the Destination Point Code resource declaration
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function pointCode($resourceId)
    {
        return $this->getSNMP()->get( self::OID_POINTCODE . '.' . $resourceId);
    }

}
