<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Statistics resource
 */
abstract class AbstractStatistics extends \OSS_SNMP\MIB
{

	const OID_BASE                              = '';

    const OID_STATUS                            = '';
	const OID_FLAGS                             = '';

	const OID_OPTIONS                           = '';

	const OID_CONGESTION                        = '';

	const OID_RETRANSMISSION_QUEUE              = '';
	const OID_RETRANSMISSION_QUEUE_MAX          = '';

	const OID_T_SAMPLE                          = '';

	const OID_COUNT_TOTAL                       = '';
	const OID_COUNT_NOW                         = '';
	const OID_COUNT_MIN                         = '';
	const OID_COUNT_MAX                         = '';
	const OID_COUNT_SAMPLE                      = '';
	const OID_COUNT_LICENSE                     = '';
	const OID_COUNT_THROTTLE                    = '';

	const OID_THROUGHPUT_TOTAL                  = '';
	const OID_THROUGHPUT_NOW                    = '';
	const OID_THROUGHPUT_MIN                    = '';
	const OID_THROUGHPUT_MAX                    = '';
	const OID_THROUGHPUT_SAMPLE                 = '';
	const OID_THROUGHPUT_LICENSE                = '';
	const OID_THROUGHPUT_THROTTLE               = '';

	const OID_THROTTLE                          = '';

	const OID_DESCRIPTION                       = '';



    /**
     * Returns the status of the VOIP Stack
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
