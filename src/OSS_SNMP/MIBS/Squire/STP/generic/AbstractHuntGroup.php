<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Hunt Group resource (group of Voice Circuits,
 * SS7 ISDNUP)
 */
abstract class AbstractHuntGroup extends \OSS_SNMP\MIB
{
    const OID_BASE                              = '';

	const OID_STATUS                            = '';
    const OID_TYPE                              = '';
	const OID_FLAGS                             = '';

	const OID_SETUP_TOTAL                       = '';
	const OID_RINGING_TOTAL                     = '';
	const OID_ANSWER_TOTAL                      = '';
	const OID_CONGESTION_TOTAL                  = '';

	const OID_TOTAL_MINUTES                     = '';

	const OID_ACTIVE_CALLS                      = '';
	const OID_ACTIVE_INBOUND                    = '';

	const OID_ACD                               = '';
	const OID_PDD                               = '';
	const OID_ASR                               = '';

	const OID_POS                               = '';

	const OID_ODD_EVEN                          = '';

	const OID_RETRY_COUNT                       = '';
	const OID_RETRY_CAUSE                       = '';
	const OID_ADD_RETRY_CAUSE                   = '';
	const OID_ADD_RETRY_CAUSE_2                 = '';

	const OID_CONGESTION_TIMER                  = '';

	const OID_ADD_VOIP_DEST                     = '';
	const OID_ADD_VOIP_DEST_2                   = '';

	const OID_VOIP_LOW                          = '';
	const OID_VOIP_HIGH                         = '';

	const OID_ALGORITHM                         = '';

	const OID_ADD_CIRCUITS                      = '';
	const OID_CIRCUITS                          = '';

	const OID_MATCH_DB                          = '';
	const OID_LCR_DB                            = '';

	const OID_MAX_CALLS                         = '';
	const OID_MAX_INBOUND                       = '';
	const OID_MAX_TRAFFIC                       = '';

	const OID_CDR_MAP                           = '';

	const OID_AAA_ACCOUNTING_NAME               = '';

	const OID_PARTNER                           = '';

	const OID_ADD_VOICE_ANNOUNCEMENT            = '';

	const OID_NAS                               = '';

	const OID_DESCRIPTION                       = '';

	const OID_REDIRECT_ADDR                     = '';

	const OID_OPTIONS                           = '';

	const OID_CODECS                            = '';
	const OID_ADD_CODEC                         = '';
	const OID_ADD_CODEC_2                       = '';



    /**
     * Returns the status of the Hunt Group
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Hunt Group
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_DESCRIPTION . '.' . $resourceId);
    }
}
