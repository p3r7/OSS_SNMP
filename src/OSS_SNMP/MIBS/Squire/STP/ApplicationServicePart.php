<?php

namespace OSS_SNMP\MIBS\Squire\STP;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Application Service Part resource
 */
class ApplicationServicePart extends \OSS_SNMP\MIB
{
    const OID_BASE                              = '.1.3.6.1.2.1.2.2.34';

	const OID_STATUS = '.1.3.6.1.2.1.2.2.34.0';
	const OID_FLAGS = '.1.3.6.1.2.1.2.2.34.1';
	const OID_ORIGINATING_POINT = '.1.3.6.1.2.1.2.2.34.2';
	const OID_TYPE = '.1.3.6.1.2.1.2.2.34.3';
	const OID_ISUP_IP = '.1.3.6.1.2.1.2.2.34.4';
	const OID_SCTP = '.1.3.6.1.2.1.2.2.34.5';
	const OID_IDENTIFIER = '.1.3.6.1.2.1.2.2.34.6';
	const OID_PROTOCOL = '.1.3.6.1.2.1.2.2.34.7';
	const OID_END = '.1.3.6.1.2.1.2.2.34.8';
	const OID_AS = '.1.3.6.1.2.1.2.2.34.9';
	const OID_INSERVICE = '.1.3.6.1.2.1.2.2.34.10';
	const OID_OUTSERVICE = '.1.3.6.1.2.1.2.2.34.11';
	const OID_DEBUG = '.1.3.6.1.2.1.2.2.34.12';
	const OID_REDUNDANCY_MODEL = '.1.3.6.1.2.1.2.2.34.13';
	const OID_INCLUDE_INTERFACE = '.ID 1.3.6.1.2.1.2.2.34.14';
	const OID_CLIENT_ASP_STATE = '.1.3.6.1.2.1.2.2.34.15';
	const OID_SERVER_ASP_STATE = '.1.3.6.1.2.1.2.2.34.16';
	const OID_T_BEAT = '.1.3.6.1.2.1.2.2.34.17';
	const OID_TACK = '.1.3.6.1.2.1.2.2.34.18';
	const OID_ROUTING_KEYS = '.1.3.6.1.2.1.2.2.34.19';
	const OID_REQ_STACK = '.1.3.6.1.2.1.2.2.34.20';
	const OID_REQ_LOCAL_RK_IDS = '.1.3.6.1.2.1.2.2.34.21';
	const OID_RESP_STACK = '.1.3.6.1.2.1.2.2.34.22';
	const OID_RESP = '.Status 1.3.6.1.2.1.2.2.34.23';
	const OID_RESP_LOCAL_RK_IDS = '.1.3.6.1.2.1.2.2.34.24';
	const OID_RESP_ROUTING_CONTEXTS = '.1.3.6.1.2.1.2.2.34.25';
	const OID_DESCRIPTION = '.1.3.6.1.2.1.2.2.34.26';
	const OID_OPTIONS = '.1.3.6.1.2.1.2.2.34.27';

    /**
     * Returns the status of the Application Service Part
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get( self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Application Service Part
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get( self::OID_DESCRIPTION . '.' . $resourceId);
    }
}
