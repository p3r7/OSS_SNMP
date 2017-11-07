<?php

namespace OSS_SNMP\MIBS\Squire\STP;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, LinkSet resource (SS7 MTP Level 2)
 */
class LinkSet extends \OSS_SNMP\MIB
{
    const OID_BASE                              = '.1.3.6.1.2.1.2.2.10';

	const OID_STATUS                            = '.1.3.6.1.2.1.2.2.10.0';
	const OID_FLAGS                             = '.1.3.6.1.2.1.2.2.10.1';
	const OID_TYPE                              = '.1.3.6.1.2.1.2.2.10.2';
	const OID_MAP                               = '.1.3.6.1.2.1.2.2.10.3';
	const OID_ORIGINATING                       = '.1.3.6.1.2.1.2.2.10.4';
	const OID_POINTCODE                         = '.1.3.6.1.2.1.2.2.10.5';
	const OID_NI                                = '.1.3.6.1.2.1.2.2.10.6';
	const OID_COMBINED                          = '.1.3.6.1.2.1.2.2.10.7';
	const OID_IN_SERVICE                        = '.1.3.6.1.2.1.2.2.10.8';
	const OID_OUT_SERVICE                       = '.1.3.6.1.2.1.2.2.10.9';
	const OID_TFX_REQUIRED                      = '.1.3.6.1.2.1.2.2.10.10';
	const OID_TRANSFER_REPORT                   = '.1.3.6.1.2.1.2.2.10.11';
	const OID_ADD_TRANSFER_REPORT               = '.1.3.6.1.2.1.2.2.10.12';
	const OID_ADD_MTP_ROUTES                    = '.1.3.6.1.2.1.2.2.10.13';
	const OID_MTP_CDR                           = '.1.3.6.1.2.1.2.2.10.14';
	const OID_TX_MSU_TOTAL                      = '.1.3.6.1.2.1.2.2.10.15';
	const OID_TX_MSU_SEC                        = '.1.3.6.1.2.1.2.2.10.16';
	const OID_TX_MSU_SEC_MAX                    = '.1.3.6.1.2.1.2.2.10.17';
	const OID_RX_MSU_TOTAL                      = '.1.3.6.1.2.1.2.2.10.18';
	const OID_RX_MSU_SEC                        = '.1.3.6.1.2.1.2.2.10.19';
	const OID_RX_MSU_SEC_MAX                    = '.1.3.6.1.2.1.2.2.10.20';
	const OID_TX_BITS_TOTAL                     = '.1.3.6.1.2.1.2.2.10.21';
	const OID_TX_BITS_SEC                       = '.1.3.6.1.2.1.2.2.10.22';
	const OID_TX_BITS_SEC_MAX                   = '.1.3.6.1.2.1.2.2.10.23';
	const OID_RX_BITS_TOTAL                     = '.1.3.6.1.2.1.2.2.10.24';
	const OID_RX_BITS_SEC                       = '.1.3.6.1.2.1.2.2.10.25';
	const OID_RX_BITS_SEC_MAX                   = '.1.3.6.1.2.1.2.2.10.26';
	const OID_DESCRIPTION                       = '.1.3.6.1.2.1.2.2.10.27';
	const OID_OPTIONS                           = '.1.3.6.1.2.1.2.2.10.28';
	const OID_COO_BIS                           = '.1.3.6.1.2.1.2.2.10.29';
	const OID_M3UA_AS                           = '.1.3.6.1.2.1.2.2.10.30';
	const OID_IC_L3LABEL                        = '.1.3.6.1.2.1.2.2.10.31';
	const OID_OG_L3LABEL                        = '.1.3.6.1.2.1.2.2.10.32';
	const OID_TX_BITS_THROTTLE                  = '.1.3.6.1.2.1.2.2.10.33';
	const OID_TX_MSU_THROTTLE                   = '.1.3.6.1.2.1.2.2.10.34';
	const OID_TX_CONGESTION                     = '.1.3.6.1.2.1.2.2.10.35';
	const OID_TX_BINNED                         = '.1.3.6.1.2.1.2.2.10.36';


    /**
     * Returns the status of the Link Set
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get( self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Link Set
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get( self::OID_DESCRIPTION . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of outbound bits on the Link Set
     *
     * @param $resourceId
     * @return string The number of outbound bits that transited by the logical interface
     */
    public function txBits($resourceId)
    {
        return $this->getSNMP()->get( self::OID_TX_BITS_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of inbound bits on the Link Set
     *
     * @param $resourceId
     * @return string The number of inbound bits that transited by the logical interface
     */
    public function rxBits($resourceId)
    {
        return $this->getSNMP()->get( self::OID_RX_BITS_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of outbound Message Service Units (MSU) on the Link Set
     *
     * @param $resourceId
     * @return string The number of outbound Message Service Units (MSU) that transited by the logical interface
     */
    public function txMsu($resourceId)
    {
        return $this->getSNMP()->get( self::OID_TX_MSU_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of inbound Message Service Units (MSU) on the Link Set
     *
     * @param $resourceId
     * @return string The number of inbound Message Service Units (MSU) that transited by the logical interface
     */
    public function rxMsu($resourceId)
    {
        return $this->getSNMP()->get( self::OID_RX_MSU_TOTAL . '.' . $resourceId);
    }
}
