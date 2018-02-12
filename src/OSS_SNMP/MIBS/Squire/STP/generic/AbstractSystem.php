<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, System resource
 */
abstract class AbstractSystem extends \OSS_SNMP\MIB
{

	const OID_BASE                              = '';

    const OID_STATUS                            = '';
	const OID_FLAGS                             = '';

	const OID_NAME                              = '';
	const OID_DESCRIPTION                       = '';

	const OID_VERSION_MAJOR                     = '';
	const OID_VERSION_MINOR                     = '';
	const OID_VERSION_BUGFIX                    = '';
	const OID_VERSION_STATUS                    = '';

	const OID_TYPE                              = '';

	const OID_ADDRESS                           = '';
	const OID_PARTNER                           = '';
	const OID_LOCAL                             = '';
	const OID_LOOP                              = '';

	const OID_REDUNDANT_MODE                    = '';

	const OID_LICENSE                           = '';
	const OID_USERNAME                          = '';
	const OID_PASSWORD                          = '';

	const OID_MANUAL_CONFIG                     = '';

	const OID_ENDPOINT_NAME                     = '';

	const OID_STATS_WINDOW_SIZE                 = '';

	const OID_REGISTRATION_FILE                 = '';

	const OID_OID                               = '';

	const OID_NB_TCP_ERRORS                     = '';

	const OID_LICENSE_STATUS                    = '';
	const OID_STATE                             = '';
	const OID_STATUS_REPORT                     = '';
	const OID_STATUS_REPORT_TIMER               = '';

	const OID_MAX_LOG_SIZE                      = '';

	const OID_SETTLE_STATE                      = '';
	const OID_T_SETTLE                          = '';

	const OID_IN_SERVICE                        = '';
	const OID_OUT_SERVICE                       = '';

	const OID_DATE_FORMAT                       = '';

	const OID_PERIODIC                          = '';

	const OID_OPTIONS                           = '';

	const OID_TIMER_THREAD_SLEEP_PERIOD         = '';



    /**
     * Returns the major version of the SVI system
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the VOIP Stack
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_DESCRIPTION . '.' . $resourceId);
    }
}
