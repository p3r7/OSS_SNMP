<?php

namespace OSS_SNMP\MIBS\Squire\STP\generic;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point, Signalink Link resource (SS7 MTP Level 2)
 */
abstract class AbstractSignalingLink extends \OSS_SNMP\MIB
{

    const OID_BASE                              = '';

    const OID_STATUS                            = '';
	const OID_FLAGS                             = '';
	const OID_TYPE                              = '';
	const OID_MAP                               = '';
	const OID_CARD                              = '';
	const OID_INTERFACE                         = '';
	const OID_CHANNEL_ID                        = '';
	const OID_TRUNK                             = '';
	const OID_TIMESLOT                          = '';
	const OID_SLC                               = '';
	const OID_ORIGINATING                       = '';
	const OID_LINKSET                           = '';
	const OID_INTERFACE_ID                      = '';
	const OID_AS                                = '';
	const OID_STREAM                            = '';
	const OID_IN_SERVICE                        = '';
	const OID_OUT_SERVICE                       = '';
	const OID_SLT_TYPE                          = '';
	const OID_L2_TASK                           = '';
	const OID_FORCE_NORMAL                      = '';
	const OID_SET_LPO                           = '';
	const OID_SET_LPR                           = '';
	const OID_INHIBIT                           = '';
	const OID_UNINHIBIT                         = '';
	const OID_DEBUG                             = '';
	const OID_PROTOCOL                          = '';
	const OID_SLTM                              = '';
	const OID_VARIANT                           = '';
	const OID_LI_PRIORITY_BIT                   = '';
	const OID_TRANSMISSION_RATE                 = '';
	const OID_MAX_THROUGHPUT                    = '';
	const OID_QUEUE_SIZE                        = '';
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
	const OID_TX_BITS_THROTTLE                  = '';
	const OID_TX_MSU_THROTTLE                   = '';
	const OID_TX_CONGESTION                     = '';
	const OID_TX_BINNED                         = '';
	const OID_M2PA_TIMERS                       = '';


    /**
     * Returns the status of the Signaling Link
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function status($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Signaling Link
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function description($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_DESCRIPTION . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of outbound bits on the Signaling Link
     *
     * @param $resourceId
     * @return string The number of outbound bits that transited by the logical interface
     */
    public function txBits($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_TX_BITS_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of inbound bits on the Signaling Link
     *
     * @param $resourceId
     * @return string The number of inbound bits that transited by the logical interface
     */
    public function rxBits($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_RX_BITS_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of outbound Message Service Units (MSU) on the Signaling Link
     *
     * @param $resourceId
     * @return string The number of outbound Message Service Units (MSU) that transited by the logical interface
     */
    public function txMsu($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_TX_MSU_TOTAL . '.' . $resourceId);
    }

    /**
     * Returns the value of a counter of number of inbound Message Service Units (MSU) on the Signaling Link
     *
     * @param $resourceId
     * @return string The number of inbound Message Service Units (MSU) that transited by the logical interface
     */
    public function rxMsu($resourceId)
    {
        return $this->getSNMP()->get(self::OID_BASE . '.' . self::OID_RX_MSU_TOTAL . '.' . $resourceId);
    }

}
