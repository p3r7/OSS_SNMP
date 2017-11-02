<?php

namespace OSS_SNMP\MIBS\Squire\STP;

/**
 * A class for performing SNMP V2 queries on Squire Signal Transfer Point
 */
class System extends \OSS_SNMP\MIB
{
    const OID_BASE                              = '.1.3.6.1.2.1.2.2';

    const OID_ASP_STATUS                        = '.1.3.6.1.2.1.2.2.34.0';
    const OID_ASP_DESC                          = '.1.3.6.1.2.1.2.2.34.26';

    const OID_CIRCUIT_STATUS                    = '.1.3.6.1.2.1.2.2.4.0';
    const OID_CIRCUIT_DESC                      = '.1.3.6.1.2.1.2.2.4.23';
    const OID_CIRCUIT_DESC_svi_v8_8_56          = '.1.3.6.1.2.1.2.2.4.21'; // older versions of Squire SVI, up to v8.8.56
    const OID_CIRCUIT_LOAD                      = '.1.3.6.1.2.1.2.2.4.16'; // CIC ???

    const OID_DISTANT_PC_STATUS                 = '.1.3.6.1.2.1.2.2.7.0';
    const OID_DISTANT_PC_DESC                   = '.1.3.6.1.2.1.2.2.7.15';

    // ???
    //const OID_RC_???_STATUS                   = '.1.3.6.1.2.1.2.2.18.0';
    //const OID_RC_???_LOAD                     = '.1.3.6.1.2.1.2.2.18.31';

    /**
     * Returns the status of the ASP
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function aspStatus($resourceId)
    {
        return $this->getSNMP()->get( self::OID_ASP_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the ASP
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function aspDesc($resourceId)
    {
        return $this->getSNMP()->get( self::OID_ASP_DESC . '.' . $resourceId);
    }


    /**
     * Returns the status of the Circuit
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function circuitStatus($resourceId)
    {
        return $this->getSNMP()->get( self::OID_CIRCUIT_STATUS  . '.' . $resourceId);
    }

    /**
     * Returns the description of the Circuit
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function circuitDesc($resourceId)
    {
        return $this->getSNMP()->get( self::OID_CIRCUIT_DESC  . '.' . $resourceId);
    }

    /**
     * Returns the description of the Circuit, for older versions of Squire SVI (up to v8.8.56)
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function circuitDescOlderFirmware($resourceId)
    {
        return $this->getSNMP()->get( self::OID_CIRCUIT_DESC_svi_v8_8_56. '.' . $resourceId);
    }

    /**
     * Returns the status of the Distant PC
     *
     * @param $resourceId
     * @return string The status of the resource
     */
    public function distantPcStatus($resourceId)
    {
        return $this->getSNMP()->get( self::OID_DISTANT_PC_STATUS . '.' . $resourceId);
    }

    /**
     * Returns the description of the Circuit
     *
     * @param $resourceId
     * @return string The label of the resource
     */
    public function distantPcDesc($resourceId)
    {
        return $this->getSNMP()->get( self::OID_DISTANT_PC_DESC  . '.' . $resourceId);
    }

}
