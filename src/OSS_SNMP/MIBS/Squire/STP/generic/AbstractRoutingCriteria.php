<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Routing Criteria resource
 */
abstract class AbstractRoutingCriteria extends \OSS_SNMP\MIB
{
    const OID_BASE                              = '';

	const OID_STATUS                            = '';
	const OID_FLAGS                             = '';

	const OID_ACD                               = '';
	const OID_PDD                               = '';
	const OID_ASR                               = '';

	const OID_DESCRIPTION                       = '';

	const OID_OPTIONS                           = '';



    /**
     * Returns the status of the Routing Criteria
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get(static::OID_BASE . '.' . static::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Routing Criteria
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get(static::OID_BASE . '.' . static::OID_DESCRIPTION . '.' . $resourceId);
    }
}
