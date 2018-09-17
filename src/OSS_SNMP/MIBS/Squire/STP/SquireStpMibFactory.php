<?php

namespace OSS_SNMP\MIBS\Squire\STP;

use OSS_SNMP\MIBS\Squire\STP\v8\System as SystemV8;
use OSS_SNMP\MIBS\Squire\STP\v10\System as SystemV10;
use OSS_SNMP\MIBS\Squire\STP\v12\System as SystemV12;

/**
 * Factory class for generating Squire STP MIBs with some version discovery.
 * We could not use OSS_SNMP Device Discovery feature as some Squire STP
 * instances do not implement the "SYSTEM DESCRIPTION" OID.
 *
 * Class SquireStpMibFactory
 * @package OSS_SNMP\MIBS\Squire\STP
 */
class SquireStpMibFactory
{
	const OID_BASE                              = '1.3.6.1.2.1.2.2.14';
	const OID_MAJOR_VERSION_old                 = SystemV10::OID_VERSION_MAJOR;
	const OID_MAJOR_VERSION_new                 = SystemV12::OID_VERSION_MAJOR;

	/* @var \OSS_SNMP\SNMP $snmp */
    protected $snmp = null;
    protected $majorVersion = null;


    // -------------------------------------------------------------------
    // CONSTRUCTOR

    /*
     *
     */
	public function __construct (\OSS_SNMP\SNMP $snmp) {
        $this->snmp = $snmp;
        $this->majorVersion = $this->getMajorVersion($snmp);
    }


    // ----------------------------------------------------------------
    // FACTORY

    /**
     * Magic method for generic function calls
     *
     * @param string $method
     * @param $args
     * @return \OSS_SNMP\MIB
     * @throws \Exception
     */
    public function __call($method, $args) {

        if( substr( $method, 0, 3 ) == 'use' )
            return $this->useExtension($this->snmp, substr($method, 3));

        throw new \Exception( "ERR: Unknown method requested in magic __call(): $method\n" );
    }

    /**
     * This is the MIB Extension magic
     *
     * Calling $this->useXXX_YYY_ZZZ()->fn() will instantiate
     * an extension MIB class is the given name and this $this SNMP
     * instance and then call fn().
     *
     * See the examples for more information.
     *
     * @param \OSS_SNMP\SNMP $snmp
     * @param string $mib The extension class to use
     * @param null $version
     * @return \OSS_SNMP\MIB
     * @throws \Exception
     */
    public function useExtension (\OSS_SNMP\SNMP $snmp, $mib, $version = null) {

        if (empty($version))
            $version = $this->majorVersion;

        $mib = '\\OSS_SNMP\\MIBS\\Squire\\STP\\' . 'v' . $version . '\\' . str_replace( '_', '\\', $mib );

        if (! in_array($version, ['8', '10', '12']))
            throw new \Exception( "ERR: Version '$version' is not supported, gotten for " . $snmp->getHost() . ".\n" );

        /* @var \OSS_SNMP\MIB $m */
        $m = new $mib();
        $m->setSNMP( $snmp );
        return $m;
    }


    // -------------------------------------------------------------------
    // AUTO VERSION DETECTION

    /**
     * @param \OSS_SNMP\SNMP $snmp
     * @return mixed
     * @throws \Exception
     */
    public function getMajorVersion (\OSS_SNMP\SNMP $snmp) {
        $hasNewerVersionOid = $this->has_newer_version_oid($snmp);

        try {
            if ($hasNewerVersionOid)
                return $snmp->get(self::OID_BASE . '.' . self::OID_MAJOR_VERSION_new . '.0');
            else
                return $snmp->get(self::OID_BASE . '.' . self::OID_MAJOR_VERSION_old . '.0');
        } catch (\OSS_SNMP\Exception $e) {
            throw new \Exception( "ERR: Could not retrieve version for " . $snmp->getHost() . ".\n" );
        }
    }

    protected function has_newer_version_oid (\OSS_SNMP\SNMP $snmp) {
        $version = $snmp->get(self::OID_BASE . '.' . self::OID_MAJOR_VERSION_old . '.0');

        return $version === 0;
    }

}
