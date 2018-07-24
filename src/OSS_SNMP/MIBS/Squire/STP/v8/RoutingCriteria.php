<?php

namespace OSS_SNMP\MIBS\Squire\STP\v8;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractRoutingCriteria;

class RoutingCriteria extends AbstractRoutingCriteria
{

    const OID_BASE                              = '.1.3.6.1.2.1.2.2.18';

	const OID_STATUS                            = '0';
	const OID_FLAGS                             = '1';

	const OID_ACD                               = '32';
	const OID_PDD                               = '33';
	const OID_ASR                               = '34';

	const OID_DESCRIPTION                       = '59';

	const OID_OPTIONS                           = '62';



}

/*

>show snmp rc
SNMP OID for Routing Criteria 1.3.6.1.2.1.2.2.18
    status 1.3.6.1.2.1.2.2.18.0.(0-1000)
    flags 1.3.6.1.2.1.2.2.18.1.(0-1000)
    MatchDb 1.3.6.1.2.1.2.2.18.2.(0-1000)
    Maximum Calls 1.3.6.1.2.1.2.2.18.3.(0-1000)
    RetryCount 1.3.6.1.2.1.2.2.18.4.(0-1000)
    Add Voice Announcement 1.3.6.1.2.1.2.2.18.5.(0-1000)
    Codecs 1.3.6.1.2.1.2.2.18.6.(0-1000)
    AddCodec 1.3.6.1.2.1.2.2.18.7.(0-1000)
    Add Codec 1.3.6.1.2.1.2.2.18.8.(0-1000)
    Routes 1.3.6.1.2.1.2.2.18.9.(0-1000)
    Add Routes 1.3.6.1.2.1.2.2.18.10.(0-1000)
    Add Route 1.3.6.1.2.1.2.2.18.11.(0-1000)
    RouteAlgorithm 1.3.6.1.2.1.2.2.18.12.(0-1000)
    Reject Cause 1.3.6.1.2.1.2.2.18.13.(0-1000)
    Local Congestion Cause 1.3.6.1.2.1.2.2.18.14.(0-1000)
    Remote Congestion Cause 1.3.6.1.2.1.2.2.18.15.(0-1000)
    CDR 1.3.6.1.2.1.2.2.18.16.(0-1000)
    CDRInterval 1.3.6.1.2.1.2.2.18.17.(0-1000)
    CDRName 1.3.6.1.2.1.2.2.18.18.(0-1000)
    Setup 1.3.6.1.2.1.2.2.18.19.(0-1000)
    Ring 1.3.6.1.2.1.2.2.18.20.(0-1000)
    Answer 1.3.6.1.2.1.2.2.18.21.(0-1000)
    Congestion 1.3.6.1.2.1.2.2.18.22.(0-1000)
    Rejected by Criteria 1.3.6.1.2.1.2.2.18.23.(0-1000)
    Minutes 1.3.6.1.2.1.2.2.18.24.(0-1000)
    24H Setup 1.3.6.1.2.1.2.2.18.25.(0-1000)
    24H Ring 1.3.6.1.2.1.2.2.18.26.(0-1000)
    24H Answer 1.3.6.1.2.1.2.2.18.27.(0-1000)
    24H Hour Congestion 1.3.6.1.2.1.2.2.18.28.(0-1000)
    24H Hour Rejected by Criteria 1.3.6.1.2.1.2.2.18.29.(0-1000)
    24H Minutes 1.3.6.1.2.1.2.2.18.30.(0-1000)
    Active 1.3.6.1.2.1.2.2.18.31.(0-1000)
    ACD 1.3.6.1.2.1.2.2.18.32.(0-1000)
    PDD 1.3.6.1.2.1.2.2.18.33.(0-1000)
    ASR 1.3.6.1.2.1.2.2.18.34.(0-1000)
    SQAPI Service 1.3.6.1.2.1.2.2.18.35.(0-1000)
    CNAM Service 1.3.6.1.2.1.2.2.18.36.(0-1000)
    Radius AA 1.3.6.1.2.1.2.2.18.37.(0-1000)
    AA Server 1.3.6.1.2.1.2.2.18.38.(0-1000)
    Radius Service Type 1.3.6.1.2.1.2.2.18.39.(0-1000)
    Authenticate/Authorise 1.3.6.1.2.1.2.2.18.40.(0-1000)
    Authenticate Method 1.3.6.1.2.1.2.2.18.41.(0-1000)
    Authorise Method 1.3.6.1.2.1.2.2.18.42.(0-1000)
    Radius Accounting 1.3.6.1.2.1.2.2.18.43.(0-1000)
    Radius Identity 1.3.6.1.2.1.2.2.18.44.(0-1000)
    Accounting Server 1.3.6.1.2.1.2.2.18.45.(0-1000)
    SQL 1.3.6.1.2.1.2.2.18.46.(0-1000)
    h323-Call-Origin 1.3.6.1.2.1.2.2.18.47.(0-1000)
    h323-Call-Type 1.3.6.1.2.1.2.2.18.48.(0-1000)
    Routing AA Server 1.3.6.1.2.1.2.2.18.49.(0-1000)
    Interim-Update Period 1.3.6.1.2.1.2.2.18.50.(0-1000)
    Match End 1.3.6.1.2.1.2.2.18.51.(0-1000)
    Hunt 1.3.6.1.2.1.2.2.18.52.(0-1000)
    Hunt Low 1.3.6.1.2.1.2.2.18.53.(0-1000)
    Hunt High 1.3.6.1.2.1.2.2.18.54.(0-1000)
    Action 1.3.6.1.2.1.2.2.18.55.(0-1000)
    Add Action 1.3.6.1.2.1.2.2.18.56.(0-1000)
    CDR SQL 1.3.6.1.2.1.2.2.18.57.(0-1000)
    Control Bits 1.3.6.1.2.1.2.2.18.58.(0-1000)
    Description 1.3.6.1.2.1.2.2.18.59.(0-1000)
    Show CDR 1.3.6.1.2.1.2.2.18.60.(0-1000)
    Cdrs Resource 1.3.6.1.2.1.2.2.18.61.(0-1000)
    Options 1.3.6.1.2.1.2.2.18.62.(0-1000)

 */