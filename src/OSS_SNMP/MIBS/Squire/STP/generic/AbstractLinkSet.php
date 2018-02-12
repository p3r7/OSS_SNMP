<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, LinkSet resource (SS7 MTP Level 2)
 */
abstract class AbstractLinkSet extends \OSS_SNMP\MIB
{
    const OID_BASE                              = '';

	const OID_STATUS                            = '';
	const OID_FLAGS                             = '';
	const OID_TYPE                              = '';
	const OID_MAP                               = '';
	const OID_ORIGINATING                       = '';
	const OID_POINTCODE                         = '';
	const OID_NI                                = '';
	const OID_COMBINED                          = '';
	const OID_IN_SERVICE                        = '';
	const OID_OUT_SERVICE                       = '';
	const OID_TFX_REQUIRED                      = '';
	const OID_TRANSFER_REPORT                   = '';
	const OID_ADD_TRANSFER_REPORT               = '';
	const OID_ADD_MTP_ROUTES                    = '';

    const OID_TX_MSU_TOTAL                      = '';
    const OID_TX_MSU_SEC                        = '';
    const OID_TX_MSU_SEC_MAX                    = '';
    const OID_RX_MSU_TOTAL                      = '';
    const OID_RX_MSU_SEC                        = '';
    const OID_RX_MSU_SEC_MAX                    = '';
    const OID_TX_BITS_TOTAL                     = '';
    const OID_TX_BITS_SEC                       = '';
    const OID_TX_BITS_SEC_MAX                   = '';
    const OID_RX_BITS_TOTAL                     = '';
    const OID_RX_BITS_SEC                       = '';
    const OID_RX_BITS_SEC_MAX                   = '';

    const OID_DESCRIPTION                       = '';
    const OID_OPTIONS                           = '';



    /**
     * Returns the status of the Link Set
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Link Set
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_DESCRIPTION . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of outbound bits on the Link Set
     *
     * @param $resourceId
     * @return string The number of outbound bits that transited by the logical interface
     */
    public function txBits($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_TX_BITS_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of inbound bits on the Link Set
     *
     * @param $resourceId
     * @return string The number of inbound bits that transited by the logical interface
     */
    public function rxBits($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_RX_BITS_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of outbound Message Service Units (MSU) on the Link Set
     *
     * @param $resourceId
     * @return string The number of outbound Message Service Units (MSU) that transited by the logical interface
     */
    public function txMsu($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_TX_MSU_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of inbound Message Service Units (MSU) on the Link Set
     *
     * @param $resourceId
     * @return string The number of inbound Message Service Units (MSU) that transited by the logical interface
     */
    public function rxMsu($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_RX_MSU_TOTAL . '.' . $resourceId);
    }
}
