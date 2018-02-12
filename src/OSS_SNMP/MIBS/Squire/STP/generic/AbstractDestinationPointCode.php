<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Destination Point Code resource (SS7 MTP
 * Level 3)
 */
abstract class AbstractDestinationPointCode extends \OSS_SNMP\MIB
{
    const OID_BASE = '';

    const OID_STATUS = '';
    const OID_FLAGS = '';
    const OID_TYPE = '';
    const OID_ORIGINATING = '';
    const OID_POINTCODE = '';
    const OID_NI = '';
    const OID_PRIMARY = '';
    const OID_SECONDARY = '';
    const OID_LOADSHARE = '';
    const OID_TRANSFER_REPORT = '';
    const OID_ADD_TRANSFER_REPORT = '';
    const OID_IN_SERVICE = '';
    const OID_OUT_SERVICE = '';
    const OID_SLS = '';
    const OID_CLINK = '';
    const OID_DESCRIPTION = '';
    const OID_MAX_MSG_PER_SECOND = '';
    const OID_MSG_PER_SECOND = '';
    const OID_R_QUE = '';
    const OID_OPTIONS = '';


    /**
     * Returns the status of the Destination Point Code
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Destination Point Code
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_DESCRIPTION . '.' . $resourceId);
    }

	/**
     * Returns the Point Code associated with the Destination Point Code resource declaration
     *
     * @param $resourceId
     * @return string The Point Code of the resource
     */
    public function pointCode($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_POINTCODE . '.' . $resourceId);
    }

}
