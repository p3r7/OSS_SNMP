<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Application Service Part resource
 */
abstract class AbstractApplicationServicePart extends \OSS_SNMP\MIB
{
    const OID_BASE = '';

	const OID_STATUS = '';
	const OID_FLAGS = '';
	const OID_ORIGINATING_POINT = '';
	const OID_TYPE = '';
	const OID_ISUP_IP = '';
	const OID_SCTP = '';
	const OID_IDENTIFIER = '';
	const OID_PROTOCOL = '';
	const OID_END = '';
	const OID_AS = '';
	const OID_INSERVICE = '';
	const OID_OUTSERVICE = '';
	const OID_DEBUG = '';
	const OID_REDUNDANCY_MODEL = '';
	const OID_INCLUDE_INTERFACE_ID = '';
	const OID_CLIENT_ASP_STATE = '';
	const OID_SERVER_ASP_STATE = '';
	const OID_T_BEAT = '';
	const OID_TACK = '';
	const OID_ROUTING_KEYS = '';
	const OID_REQ_STACK = '';
	const OID_REQ_LOCAL_RK_IDS = '';
	const OID_RESP_STACK = '';
	const OID_RESP_STATUS = '';
	const OID_RESP_LOCAL_RK_IDS = '';
	const OID_RESP_ROUTING_CONTEXTS = '';
	const OID_DESCRIPTION = '';
	const OID_OPTIONS = '';

    /**
     * Returns the status of the Application Service Part
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Application Service Part
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_DESCRIPTION . '.' . $resourceId);
    }
}
