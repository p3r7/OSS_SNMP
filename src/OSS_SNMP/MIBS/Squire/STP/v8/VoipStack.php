<?php

namespace OSS_SNMP\MIBS\Squire\STP\v8;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractVoipStack;

class VoipStack extends AbstractVoipStack
{

	const OID_BASE                              = '1.3.6.1.2.1.2.2.26';

    const OID_STATUS                            = '0';
	const OID_FLAGS                             = '1';
	const OID_TYPE                              = '2';

	const OID_NAME                              = '3';
	const OID_ADDRESS                           = '4';
	const OID_SUBNET                            = '5';
	const OID_PORT                              = '6';

	const OID_IN_SERVICE                        = '36';
	const OID_OUT_SERVICE                       = '37';

	const OID_DESCRIPTION                       = '43';
	const OID_OPTIONS                           = '44';


}

/*

>show snmp voip stack
SNMP OID for VoIP Stack 1.3.6.1.2.1.2.2.26
    status 1.3.6.1.2.1.2.2.26.0.(0-10)
    flags 1.3.6.1.2.1.2.2.26.1.(0-10)
    Type 1.3.6.1.2.1.2.2.26.2.(0-10)
    name 1.3.6.1.2.1.2.2.26.3.(0-10)
    address 1.3.6.1.2.1.2.2.26.4.(0-10)
    subnet 1.3.6.1.2.1.2.2.26.5.(0-10)
    port 1.3.6.1.2.1.2.2.26.6.(0-10)
    KeepAliveStart 1.3.6.1.2.1.2.2.26.7.(0-10)
    KeepAliveInterval 1.3.6.1.2.1.2.2.26.8.(0-10)
    KeepAliveCount 1.3.6.1.2.1.2.2.26.9.(0-10)
    IpSocket 1.3.6.1.2.1.2.2.26.10.(0-10)
    FastStart 1.3.6.1.2.1.2.2.26.11.(0-10)
    H245Tunneling 1.3.6.1.2.1.2.2.26.12.(0-10)
    H245Tunnelling 1.3.6.1.2.1.2.2.26.13.(0-10)
    H225MaintainConnection 1.3.6.1.2.1.2.2.26.14.(0-10)
    H225MultipleCalls 1.3.6.1.2.1.2.2.26.15.(0-10)
    H245FacilityPDU 1.3.6.1.2.1.2.2.26.16.(0-10)
    H225SendStartH245 1.3.6.1.2.1.2.2.26.17.(0-10)
    T35CountryCode 1.3.6.1.2.1.2.2.26.18.(0-10)
    T35Extension 1.3.6.1.2.1.2.2.26.19.(0-10)
    manufacturerCode 1.3.6.1.2.1.2.2.26.20.(0-10)
    H245TCSREJ 1.3.6.1.2.1.2.2.26.21.(0-10)
    H245StartPort 1.3.6.1.2.1.2.2.26.22.(0-10)
    H245EndPort 1.3.6.1.2.1.2.2.26.23.(0-10)
    user=phone 1.3.6.1.2.1.2.2.26.24.(0-10)
    sipversion 1.3.6.1.2.1.2.2.26.25.(0-10)
    T1 1.3.6.1.2.1.2.2.26.26.(0-10)
    T2 1.3.6.1.2.1.2.2.26.27.(0-10)
    T4 1.3.6.1.2.1.2.2.26.28.(0-10)
    D 1.3.6.1.2.1.2.2.26.29.(0-10)
    Tb 1.3.6.1.2.1.2.2.26.30.(0-10)
    Tf 1.3.6.1.2.1.2.2.26.31.(0-10)
    Th 1.3.6.1.2.1.2.2.26.32.(0-10)
    Tj 1.3.6.1.2.1.2.2.26.33.(0-10)
    ForceSipExpiry 1.3.6.1.2.1.2.2.26.34.(0-10)
    SipExpiry 1.3.6.1.2.1.2.2.26.35.(0-10)
    Inservice 1.3.6.1.2.1.2.2.26.36.(0-10)
    Outservice 1.3.6.1.2.1.2.2.26.37.(0-10)
    Proxy Media 1.3.6.1.2.1.2.2.26.38.(0-10)
    Contact Header 1.3.6.1.2.1.2.2.26.39.(0-10)
    RPID Header 1.3.6.1.2.1.2.2.26.40.(0-10)
    Append CallID 1.3.6.1.2.1.2.2.26.41.(0-10)
    ExpiryGrace 1.3.6.1.2.1.2.2.26.42.(0-10)
    Description 1.3.6.1.2.1.2.2.26.43.(0-10)
    Options 1.3.6.1.2.1.2.2.26.44.(0-10)

 */