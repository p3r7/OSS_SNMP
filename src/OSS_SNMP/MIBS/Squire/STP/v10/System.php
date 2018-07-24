<?php

namespace OSS_SNMP\MIBS\Squire\STP\v10;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractSystem;

class System extends AbstractSystem
{
    const OID_BASE                              = '.1.3.6.1.2.1.2.2.14';

    const OID_STATUS                            = '0';
    const OID_FLAGS                             = '1';

    const OID_NAME                              = '2';

    const OID_VERSION_MAJOR                     = '3';
    const OID_VERSION_MINOR                     = '4';
    const OID_VERSION_BUGFIX                    = '5';
    const OID_VERSION_STATUS                    = '6';

    const OID_TYPE                              = '7';

    const OID_ADDRESS                           = '8';
    const OID_PARTNER                           = '9';
    const OID_LOCAL                             = '10';
    const OID_LOOP                              = '11';

    const OID_REDUNDANT_MODE                    = '12';

    const OID_LICENSE                           = '13';
    const OID_USERNAME                          = '14';
    const OID_PASSWORD                          = '15';

    const OID_MANUAL_CONFIG                     = '16';

    const OID_ENDPOINT_NAME                     = '17';

    const OID_STATS_WINDOW_SIZE                 = '18';

    const OID_REGISTRATION_FILE                 = '19';

    const OID_OID                               = '20';

    const OID_NB_TCP_ERRORS                     = '21';

    const OID_LICENSE_STATUS                    = '22';
    const OID_STATE                             = '23';
    const OID_STATUS_REPORT                     = '24';
    const OID_STATUS_REPORT_TIMER               = '25';

    const OID_MAX_LOG_SIZE                      = '26';

    const OID_SETTLE_STATE                      = '27';
    const OID_TYPE_2                            = '28';
    const OID_T_SETTLE                          = '29';

    const OID_IN_SERVICE                        = '30';
    const OID_OUT_SERVICE                       = '31';

    const OID_DATE_FORMAT                       = '32';

	const OID_DESCRIPTION                       = '33';

    const OID_PERIODIC                          = '34';

    const OID_OPTIONS                           = '54';


}

/*

>show snmp system
SNMP OID for System 1.3.6.1.2.1.2.2.14
    status 1.3.6.1.2.1.2.2.14.0.(0-1)
    flags 1.3.6.1.2.1.2.2.14.1.(0-1)
    name 1.3.6.1.2.1.2.2.14.2.(0-1)
    Version Major 1.3.6.1.2.1.2.2.14.3.(0-1)
    Version Minor 1.3.6.1.2.1.2.2.14.4.(0-1)
    Version BugFix 1.3.6.1.2.1.2.2.14.5.(0-1)
    Version Status 1.3.6.1.2.1.2.2.14.6.(0-1)
    type 1.3.6.1.2.1.2.2.14.7.(0-1)
    address 1.3.6.1.2.1.2.2.14.8.(0-1)
    partner 1.3.6.1.2.1.2.2.14.9.(0-1)
    local 1.3.6.1.2.1.2.2.14.10.(0-1)
    loop 1.3.6.1.2.1.2.2.14.11.(0-1)
    Redundant Mode 1.3.6.1.2.1.2.2.14.12.(0-1)
    license 1.3.6.1.2.1.2.2.14.13.(0-1)
    username 1.3.6.1.2.1.2.2.14.14.(0-1)
    password 1.3.6.1.2.1.2.2.14.15.(0-1)
    ManualConfig 1.3.6.1.2.1.2.2.14.16.(0-1)
    EndpointName 1.3.6.1.2.1.2.2.14.17.(0-1)
    Stats Window Size 1.3.6.1.2.1.2.2.14.18.(0-1)
    Registration File 1.3.6.1.2.1.2.2.14.19.(0-1)
    OID 1.3.6.1.2.1.2.2.14.20.(0-1)
    NumTCPErrors 1.3.6.1.2.1.2.2.14.21.(0-1)
    License Status 1.3.6.1.2.1.2.2.14.22.(0-1)
    State 1.3.6.1.2.1.2.2.14.23.(0-1)
    Status Report 1.3.6.1.2.1.2.2.14.24.(0-1)
    Status Report Timer 1.3.6.1.2.1.2.2.14.25.(0-1)
    MaxLogSize 1.3.6.1.2.1.2.2.14.26.(0-1)
    Settle State 1.3.6.1.2.1.2.2.14.27.(0-1)
    Type 1.3.6.1.2.1.2.2.14.28.(0-1)
    Tsettle 1.3.6.1.2.1.2.2.14.29.(0-1)
    Inservice 1.3.6.1.2.1.2.2.14.30.(0-1)
    Outservice 1.3.6.1.2.1.2.2.14.31.(0-1)
    Date Format 1.3.6.1.2.1.2.2.14.32.(0-1)
    Description 1.3.6.1.2.1.2.2.14.33.(0-1)
    Periodic 1.3.6.1.2.1.2.2.14.34.(0-1)
    Send CNAM 1.3.6.1.2.1.2.2.14.35.(0-1)
    Send SST 1.3.6.1.2.1.2.2.14.36.(0-1)
    Send SSA 1.3.6.1.2.1.2.2.14.37.(0-1)
    Send SST ANSI 1.3.6.1.2.1.2.2.14.38.(0-1)
    Send SSA ANSI 1.3.6.1.2.1.2.2.14.39.(0-1)
    Send LNP_IA 1.3.6.1.2.1.2.2.14.40.(0-1)
    Send LIDB 1.3.6.1.2.1.2.2.14.41.(0-1)
    Send 800 1.3.6.1.2.1.2.2.14.42.(0-1)
    Send ASPIA_ACK 1.3.6.1.2.1.2.2.14.43.(0-1)
    Send ATI 1.3.6.1.2.1.2.2.14.44.(0-1)
    test cdpn 1.3.6.1.2.1.2.2.14.45.(0-1)
    test cdpnnoa 1.3.6.1.2.1.2.2.14.46.(0-1)
    test cdpnssn 1.3.6.1.2.1.2.2.14.47.(0-1)
    test cgpn 1.3.6.1.2.1.2.2.14.48.(0-1)
    test cgpnnoa 1.3.6.1.2.1.2.2.14.49.(0-1)
    test cgpnssn 1.3.6.1.2.1.2.2.14.50.(0-1)
    test opc 1.3.6.1.2.1.2.2.14.51.(0-1)
    test dpc 1.3.6.1.2.1.2.2.14.52.(0-1)
    test ni 1.3.6.1.2.1.2.2.14.53.(0-1)
    Options 1.3.6.1.2.1.2.2.14.54.(0-1)
    Timer Thread Sleep Period 1.3.6.1.2.1.2.2.14.55.(0-1)
    Emergency Hunt Group Template 1.3.6.1.2.1.2.2.14.56.(0-1)
    Emergency VoIP Destination Template 1.3.6.1.2.1.2.2.14.57.(0-1)
    Emergency Routing Criteria 1.3.6.1.2.1.2.2.14.58.(0-1)
    Host Name 1.3.6.1.2.1.2.2.14.59.(0-1)
    MaxPeriodLoopTime 1.3.6.1.2.1.2.2.14.60.(0-1)
    MaxPeriodTime 1.3.6.1.2.1.2.2.14.61.(0-1)
    MaxPeriodTask 1.3.6.1.2.1.2.2.14.62.(0-1)
    MaxRxTime 1.3.6.1.2.1.2.2.14.63.(0-1)
    Interface 1.3.6.1.2.1.2.2.14.64.(0-1)

 */