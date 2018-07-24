<?php

namespace OSS_SNMP\MIBS\Squire\STP\v12;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractSystem;

class System extends AbstractSystem
{
	const OID_BASE                              = '.1.3.6.1.2.1.2.2.14';

    const OID_STATUS                            = '0';
	const OID_FLAGS                             = '1';

	const OID_NAME                              = '2';

	const OID_DESCRIPTION                       = '3';

	const OID_PRODUCT                           = '4'; // version-specific
	const OID_VERSION_MAJOR                     = '5';
	const OID_VERSION_MINOR                     = '6';
	const OID_VERSION_BUGFIX                    = '7';
	const OID_VERSION_STATUS                    = '8';

	const OID_TYPE                              = '9';

	const OID_ADDRESS                           = '10';
	const OID_PARTNER                           = '11';
	const OID_LOCAL                             = '12';
	const OID_LOOP                              = '13';

	const OID_REDUNDANT_MODE                    = '14';

	const OID_LICENSE                           = '15';
	const OID_USERNAME                          = '16';
	const OID_PASSWORD                          = '17';

	const OID_MANUAL_CONFIG                     = '18';

	const OID_ENDPOINT_NAME                     = '19';

	const OID_STATS_WINDOW_SIZE                 = '20';

	const OID_REGISTRATION_FILE                 = '21';

	const OID_OID                               = '22';

	const OID_NB_TCP_ERRORS                     = '23';

	const OID_LICENSE_STATUS                    = '24';
	const OID_STATE                             = '25';
	const OID_STATUS_REPORT                     = '26';
	const OID_STATUS_REPORT_TIMER               = '27';

	const OID_MAX_LOG_SIZE                      = '28';

	const OID_SETTLE_STATE                      = '29';
	const OID_TYPE_2                            = '30';
	const OID_T_SETTLE                          = '31';

	const OID_IN_SERVICE                        = '32';
	const OID_OUT_SERVICE                       = '33';

	const OID_DATE_FORMAT                       = '34';

	const OID_PERIODIC                          = '35';

	const OID_OPTIONS                           = '73';

	const OID_TIMER_THREAD_SLEEP_PERIOD         = '74';


}

/*

>show snmp system
SNMP OID for System 1.3.6.1.2.1.2.2.14
    status 1.3.6.1.2.1.2.2.14.0.(0-1)
    flags 1.3.6.1.2.1.2.2.14.1.(0-1)
    name 1.3.6.1.2.1.2.2.14.2.(0-1)
    Description 1.3.6.1.2.1.2.2.14.3.(0-1)
    Product 1.3.6.1.2.1.2.2.14.4.(0-1)
    Version Major 1.3.6.1.2.1.2.2.14.5.(0-1)
    Version Minor 1.3.6.1.2.1.2.2.14.6.(0-1)
    Version BugFix 1.3.6.1.2.1.2.2.14.7.(0-1)
    Version Status 1.3.6.1.2.1.2.2.14.8.(0-1)
    type 1.3.6.1.2.1.2.2.14.9.(0-1)
    address 1.3.6.1.2.1.2.2.14.10.(0-1)
    partner 1.3.6.1.2.1.2.2.14.11.(0-1)
    local 1.3.6.1.2.1.2.2.14.12.(0-1)
    loop 1.3.6.1.2.1.2.2.14.13.(0-1)
    Redundant Mode 1.3.6.1.2.1.2.2.14.14.(0-1)
    license 1.3.6.1.2.1.2.2.14.15.(0-1)
    username 1.3.6.1.2.1.2.2.14.16.(0-1)
    password 1.3.6.1.2.1.2.2.14.17.(0-1)
    ManualConfig 1.3.6.1.2.1.2.2.14.18.(0-1)
    EndpointName 1.3.6.1.2.1.2.2.14.19.(0-1)
    Stats Window Size 1.3.6.1.2.1.2.2.14.20.(0-1)
    Registration File 1.3.6.1.2.1.2.2.14.21.(0-1)
    OID 1.3.6.1.2.1.2.2.14.22.(0-1)
    NumTCPErrors 1.3.6.1.2.1.2.2.14.23.(0-1)
    License Status 1.3.6.1.2.1.2.2.14.24.(0-1)
    State 1.3.6.1.2.1.2.2.14.25.(0-1)
    Status Report 1.3.6.1.2.1.2.2.14.26.(0-1)
    Status Report Timer 1.3.6.1.2.1.2.2.14.27.(0-1)
    MaxLogSize 1.3.6.1.2.1.2.2.14.28.(0-1)
    Settle State 1.3.6.1.2.1.2.2.14.29.(0-1)
    Type 1.3.6.1.2.1.2.2.14.30.(0-1)
    Tsettle 1.3.6.1.2.1.2.2.14.31.(0-1)
    Inservice 1.3.6.1.2.1.2.2.14.32.(0-1)
    Outservice 1.3.6.1.2.1.2.2.14.33.(0-1)
    Date Format 1.3.6.1.2.1.2.2.14.34.(0-1)
    Periodic 1.3.6.1.2.1.2.2.14.35.(0-1)
    Send CNAM 1.3.6.1.2.1.2.2.14.36.(0-1)
    Send CNAMRESP 1.3.6.1.2.1.2.2.14.37.(0-1)
    Send SST 1.3.6.1.2.1.2.2.14.38.(0-1)
    Send SSA 1.3.6.1.2.1.2.2.14.39.(0-1)
    Send SSP 1.3.6.1.2.1.2.2.14.40.(0-1)
    Send SST ANSI 1.3.6.1.2.1.2.2.14.41.(0-1)
    Send SSA ANSI 1.3.6.1.2.1.2.2.14.42.(0-1)
    Send LNP_IA 1.3.6.1.2.1.2.2.14.43.(0-1)
    Send LIDB 1.3.6.1.2.1.2.2.14.44.(0-1)
    Send 800 1.3.6.1.2.1.2.2.14.45.(0-1)
    Send ASPIA_ACK 1.3.6.1.2.1.2.2.14.46.(0-1)
    Send ATI 1.3.6.1.2.1.2.2.14.47.(0-1)
    Send Inap Connect 1.3.6.1.2.1.2.2.14.48.(0-1)
    Send Inap Continue 1.3.6.1.2.1.2.2.14.49.(0-1)
    Send Inap Activity Test 1.3.6.1.2.1.2.2.14.50.(0-1)
    Send Inap Activity Test RRL 1.3.6.1.2.1.2.2.14.51.(0-1)
    Send Inap IDP 1.3.6.1.2.1.2.2.14.52.(0-1)
    Send Inap Report Event BCSM 1.3.6.1.2.1.2.2.14.53.(0-1)
    Send Inap Apply Charging 1.3.6.1.2.1.2.2.14.54.(0-1)
    Send Inap Apply Charging Report 1.3.6.1.2.1.2.2.14.55.(0-1)
    Send MWI 1.3.6.1.2.1.2.2.14.56.(0-1)
    Send MWI2 1.3.6.1.2.1.2.2.14.57.(0-1)
    Send MWI3 1.3.6.1.2.1.2.2.14.58.(0-1)
    DumpRegHash 1.3.6.1.2.1.2.2.14.59.(0-1)
    CheckRegSipExpiry 1.3.6.1.2.1.2.2.14.60.(0-1)
    dumpH323CallRecords 1.3.6.1.2.1.2.2.14.61.(0-1)
    dumpH323SktRecords 1.3.6.1.2.1.2.2.14.62.(0-1)
    Print Routing 1.3.6.1.2.1.2.2.14.63.(0-1)
    test cdpn 1.3.6.1.2.1.2.2.14.64.(0-1)
    test cdpnnoa 1.3.6.1.2.1.2.2.14.65.(0-1)
    test cdpnssn 1.3.6.1.2.1.2.2.14.66.(0-1)
    test cgpn 1.3.6.1.2.1.2.2.14.67.(0-1)
    test cgpnnoa 1.3.6.1.2.1.2.2.14.68.(0-1)
    test cgpnssn 1.3.6.1.2.1.2.2.14.69.(0-1)
    test opc 1.3.6.1.2.1.2.2.14.70.(0-1)
    test dpc 1.3.6.1.2.1.2.2.14.71.(0-1)
    test ni 1.3.6.1.2.1.2.2.14.72.(0-1)
    Options 1.3.6.1.2.1.2.2.14.73.(0-1)
    Timer Thread Sleep Period 1.3.6.1.2.1.2.2.14.74.(0-1)
    Emergency Hunt Group Template 1.3.6.1.2.1.2.2.14.75.(0-1)
    Emergency VoIP Destination Template 1.3.6.1.2.1.2.2.14.76.(0-1)
    Emergency Routing Criteria 1.3.6.1.2.1.2.2.14.77.(0-1)
    Host Name 1.3.6.1.2.1.2.2.14.78.(0-1)
    MaxPeriodLoopTime 1.3.6.1.2.1.2.2.14.79.(0-1)
    MaxPeriodTime 1.3.6.1.2.1.2.2.14.80.(0-1)
    MaxPeriodTask 1.3.6.1.2.1.2.2.14.81.(0-1)
    MaxPeriodQue 1.3.6.1.2.1.2.2.14.82.(0-1)
    MaxCCMsgTime 1.3.6.1.2.1.2.2.14.83.(0-1)
    MaxCCMsgDetails 1.3.6.1.2.1.2.2.14.84.(0-1)
    CCMsgPerLoop 1.3.6.1.2.1.2.2.14.85.(0-1)
    MaxRxTime 1.3.6.1.2.1.2.2.14.86.(0-1)
    Interface 1.3.6.1.2.1.2.2.14.87.(0-1)
    Show_RTR_Stats 1.3.6.1.2.1.2.2.14.88.(0-1)
    Reset_RTR_Stats 1.3.6.1.2.1.2.2.14.89.(0-1)
    SNMP Version 1.3.6.1.2.1.2.2.14.90.(0-1)
    ReinitialiseSNMP 1.3.6.1.2.1.2.2.14.91.(0-1)
    Clock tick 1.3.6.1.2.1.2.2.14.92.(0-1)
    Timezone 1.3.6.1.2.1.2.2.14.93.(0-1)
    Timezone Sign 1.3.6.1.2.1.2.2.14.94.(0-1)
    MultiThread 1.3.6.1.2.1.2.2.14.95.(0-1)
    SSME 1.3.6.1.2.1.2.2.14.96.(0-1)
    Periodic Touch File 1.3.6.1.2.1.2.2.14.97.(0-1)
    Touch File Interval 1.3.6.1.2.1.2.2.14.98.(0-1)
    Sched Sleep 1.3.6.1.2.1.2.2.14.99.(0-1)

 */