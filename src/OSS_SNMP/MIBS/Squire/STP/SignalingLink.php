<?php

namespace OSS_SNMP\MIBS\Squire\STP;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Signalink Link resource (SS7 MTP Level 2)
 */
class SignalingLink extends \OSS_SNMP\MIB
{

    const OID_BASE                              = '.1.3.6.1.2.1.2.2.3';

    const OID_STATUS                            = '.1.3.6.1.2.1.2.2.3.0';
	const OID_FLAGS                             = '.1.3.6.1.2.1.2.2.3.1';
	const OID_TYPE                              = '.1.3.6.1.2.1.2.2.3.2';
	const OID_MAP                               = '.1.3.6.1.2.1.2.2.3.3';
	const OID_CARD                              = '.1.3.6.1.2.1.2.2.3.4';
	const OID_INTERFACE                         = '.1.3.6.1.2.1.2.2.3.5';
	const OID_CHANNEL_ID                        = '.1.3.6.1.2.1.2.2.3.6';
	const OID_TRUNK                             = '.1.3.6.1.2.1.2.2.3.7';
	const OID_TIMESLOT                          = '.1.3.6.1.2.1.2.2.3.8';
	const OID_SLC                               = '.1.3.6.1.2.1.2.2.3.9';
	const OID_ORIGINATING                       = '.1.3.6.1.2.1.2.2.3.10';
	const OID_LINKSET                           = '.1.3.6.1.2.1.2.2.3.11';
	const OID_INTERFACE_ID                      = '.1.3.6.1.2.1.2.2.3.12';
	const OID_AS                                = '.1.3.6.1.2.1.2.2.3.13';
	const OID_STREAM                            = '.1.3.6.1.2.1.2.2.3.14';
	const OID_IN_SERVICE                        = '.1.3.6.1.2.1.2.2.3.15';
	const OID_OUT_SERVICE                       = '.1.3.6.1.2.1.2.2.3.16';
	const OID_SLT_TYPE                          = '.1.3.6.1.2.1.2.2.3.17';
	const OID_L2_TASK                           = '.1.3.6.1.2.1.2.2.3.18';
	const OID_FORCE_NORMAL                      = '.1.3.6.1.2.1.2.2.3.19';
	const OID_SET_LPO                           = '.1.3.6.1.2.1.2.2.3.20';
	const OID_SET_LPR                           = '.1.3.6.1.2.1.2.2.3.21';
	const OID_INHIBIT                           = '.1.3.6.1.2.1.2.2.3.22';
	const OID_UNINHIBIT                         = '.1.3.6.1.2.1.2.2.3.23';
	const OID_DEBUG                             = '.1.3.6.1.2.1.2.2.3.24';
	const OID_PROTOCOL                          = '.1.3.6.1.2.1.2.2.3.25';
	const OID_SLTM                              = '.1.3.6.1.2.1.2.2.3.26';
	const OID_VARIANT                           = '.1.3.6.1.2.1.2.2.3.27';
	const OID_LI_PRIORITY_BIT                   = '.1.3.6.1.2.1.2.2.3.28';
	const OID_TRANSMISSION_RATE                 = '.1.3.6.1.2.1.2.2.3.29';
	const OID_MAX_THROUGHPUT                    = '.1.3.6.1.2.1.2.2.3.30';
	const OID_QUEUE_SIZE                        = '.1.3.6.1.2.1.2.2.3.31';
	const OID_TX_MSU_TOTAL                      = '.1.3.6.1.2.1.2.2.3.32';
	const OID_TX_MSU_SEC                        = '.1.3.6.1.2.1.2.2.3.33';
	const OID_TX_MSU_SEC_MAX                    = '.1.3.6.1.2.1.2.2.3.34';
	const OID_RX_MSU_TOTAL                      = '.1.3.6.1.2.1.2.2.3.35';
	const OID_RX_MSU_SEC                        = '.1.3.6.1.2.1.2.2.3.36';
	const OID_RX_MSU_SEC_MAX                    = '.1.3.6.1.2.1.2.2.3.37';
	const OID_TX_BITS_TOTAL                     = '.1.3.6.1.2.1.2.2.3.38';
	const OID_TX_BITS_SEC                       = '.1.3.6.1.2.1.2.2.3.39';
	const OID_TX_BITS_SEC_MAX                   = '.1.3.6.1.2.1.2.2.3.40';
	const OID_RX_BITS_TOTAL                     = '.1.3.6.1.2.1.2.2.3.41';
	const OID_RX_BITS_SEC                       = '.1.3.6.1.2.1.2.2.3.42';
	const OID_RX_BITS_SEC_MAX                   = '.1.3.6.1.2.1.2.2.3.43';
	const OID_DESCRIPTION                       = '.1.3.6.1.2.1.2.2.3.44';
	const OID_OPTIONS                           = '.1.3.6.1.2.1.2.2.3.45';
	const OID_TX_BITS_THROTTLE                  = '.1.3.6.1.2.1.2.2.3.46';
	const OID_TX_MSU_THROTTLE                   = '.1.3.6.1.2.1.2.2.3.47';
	const OID_TX_CONGESTION                     = '.1.3.6.1.2.1.2.2.3.48';
	const OID_TX_BINNED                         = '.1.3.6.1.2.1.2.2.3.49';
	const OID_M2PA_TIMERS                       = '.1.3.6.1.2.1.2.2.3.50';


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
