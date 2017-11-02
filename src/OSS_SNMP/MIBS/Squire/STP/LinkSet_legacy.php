<?php

namespace OSS_SNMP\MIBS\Squire\STP;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, LinkSet resource
 * This has been proven to works for Squire SVI version 8.8.56
 */
class LinkSet_legacy extends \OSS_SNMP\MIB
{
    const OID_BASE                              = '.1.3.6.1.2.1.2.2.8';

	const OID_STATUS = '.1.3.6.1.2.1.2.2.8.0';
	const OID_FLAGS = '.1.3.6.1.2.1.2.2.8.1';
	const OID_TYPE = '.1.3.6.1.2.1.2.2.8.2';
	const OID_MAP = '.1.3.6.1.2.1.2.2.8.3';
	const OID_ORIGINATING = '.1.3.6.1.2.1.2.2.8.4';
	const OID_POINTCODE = '.1.3.6.1.2.1.2.2.8.5';
	const OID_NI = '.1.3.6.1.2.1.2.2.8.6';
	const OID_COMBINED = '.1.3.6.1.2.1.2.2.8.7';
	const OID_INSERVICE = '.1.3.6.1.2.1.2.2.8.8';
	const OID_OUTSERVICE = '.1.3.6.1.2.1.2.2.8.9';
	const OID_TFX_REQUIRED = '.1.3.6.1.2.1.2.2.8.10';
	const OID_TRANSFER_REPORT = '.1.3.6.1.2.1.2.2.8.11';
	const OID_ADD_TRANSFER_REPORT = '.1.3.6.1.2.1.2.2.8.12';
	const OID_ADD_MTP_ROUTES = '.1.3.6.1.2.1.2.2.8.13';
	const OID_MTP_ROUTE_LOW = '.1.3.6.1.2.1.2.2.8.14';
	const OID_MTP_ROUTE_HIGH = '.1.3.6.1.2.1.2.2.8.15';
	const OID_TX_MSU_TOTAL = '.1.3.6.1.2.1.2.2.8.16';
	const OID_TX_MSU_SEC = '.1.3.6.1.2.1.2.2.8.17';
	const OID_TX_MSU_SEC_MAX = '.1.3.6.1.2.1.2.2.8.18';
	const OID_RX_MSU_TOTAL = '.1.3.6.1.2.1.2.2.8.19';
	const OID_RX_MSU_SEC = '.1.3.6.1.2.1.2.2.8.20';
	const OID_RX_MSU_SEC_MAX = '.1.3.6.1.2.1.2.2.8.21';
	const OID_TX_BITS_TOTAL = '.1.3.6.1.2.1.2.2.8.22';
	const OID_TX_BITS_SEC = '.1.3.6.1.2.1.2.2.8.23';
	const OID_TX_BITS_SEC_MAX = '.1.3.6.1.2.1.2.2.8.24';
	const OID_RX_BITS_TOTAL = '.1.3.6.1.2.1.2.2.8.25';
	const OID_RX_BITS_SEC = '.1.3.6.1.2.1.2.2.8.26';
	const OID_RX_BITS_SEC_MAX = '.1.3.6.1.2.1.2.2.8.27';
	const OID_DESCRIPTION = '.1.3.6.1.2.1.2.2.8.28';
	const OID_OPTIONS = '.1.3.6.1.2.1.2.2.8.29';

    /**
     * Returns the status of the Signaling Link
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get( self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Signaling Link
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get( self::OID_DESCRIPTION . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of outbound bits on the Signaling Link
     *
     * @param $resourceId
     * @return string The number of outbound bits that transited by the logical interface
     */
    public function txBits($resourceId)
    {
        return $this->getSNMP()->get( self::OID_TX_BITS_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of inbound bits on the Signaling Link
     *
     * @param $resourceId
     * @return string The number of inbound bits that transited by the logical interface
     */
    public function rxBits($resourceId)
    {
        return $this->getSNMP()->get( self::OID_RX_BITS_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of outbound Message Service Units (MSU) on the Signaling Link
     *
     * @param $resourceId
     * @return string The number of outbound Message Service Units (MSU) that transited by the logical interface
     */
    public function txMsu($resourceId)
    {
        return $this->getSNMP()->get( self::OID_TX_MSU_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of inbound Message Service Units (MSU) on the Signaling Link
     *
     * @param $resourceId
     * @return string The number of inbound Message Service Units (MSU) that transited by the logical interface
     */
    public function rxMsu($resourceId)
    {
        return $this->getSNMP()->get( self::OID_RX_MSU_TOTAL . '.' . $resourceId);
    }
}
