<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Sctp resource (Sigtran SCTP)
 */
abstract class AbstractSctp extends \OSS_SNMP\MIB
{

	const OID_BASE                              = '';

    const OID_STATUS                            = '';
	const OID_FLAGS                             = '';
	const OID_TYPE                              = '';


	const OID_ASP                               = '';
	const OID_LOCAL_PORT                        = '';
	const OID_LOCAL_ADDRESS                     = '';
	const OID_REMOTE_PORT                       = '';
	const OID_REMOTE_ADDRESS                    = '';

	const OID_OUTGOING_STREAMS                  = '';
	const OID_INCOMING_STREAMS                  = '';

	const OID_END                               = '';

	const OID_PROTOCOL                          = '';
	const OID_IP                                = '';

	const OID_IN_SERVICE                        = '';
	const OID_OUT_SERVICE                       = '';

	const OID_DESCRIPTION                       = '';

	const OID_OPTIONS                           = '';


    /**
     * Returns the status of the Sctp
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get(static::OID_BASE . '.' . static::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Sctp
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get(static::OID_BASE . '.' . static::OID_DESCRIPTION . '.' . $resourceId);
    }
}
