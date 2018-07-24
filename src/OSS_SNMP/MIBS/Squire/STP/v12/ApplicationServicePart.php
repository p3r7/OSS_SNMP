<?php

namespace OSS_SNMP\MIBS\Squire\STP\v12;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractApplicationServicePart;

class ApplicationServicePart extends AbstractApplicationServicePart
{
    const OID_BASE = '.1.3.6.1.2.1.2.2.34';

    const OID_STATUS = '0';
    const OID_DESCRIPTION = '26';
}

/*

>show snmp asp
SNMP OID for ASP 1.3.6.1.2.1.2.2.34
    status 1.3.6.1.2.1.2.2.34.0.(0-32)
    flags 1.3.6.1.2.1.2.2.34.1.(0-32)
    Originating Point 1.3.6.1.2.1.2.2.34.2.(0-32)
    Type 1.3.6.1.2.1.2.2.34.3.(0-32)
    IsupIP 1.3.6.1.2.1.2.2.34.4.(0-32)
    SCTP 1.3.6.1.2.1.2.2.34.5.(0-32)
    Identifier 1.3.6.1.2.1.2.2.34.6.(0-32)
    Protocol 1.3.6.1.2.1.2.2.34.7.(0-32)
    End 1.3.6.1.2.1.2.2.34.8.(0-32)
    As 1.3.6.1.2.1.2.2.34.9.(0-32)
    Inservice 1.3.6.1.2.1.2.2.34.10.(0-32)
    Outservice 1.3.6.1.2.1.2.2.34.11.(0-32)
    Debug 1.3.6.1.2.1.2.2.34.12.(0-32)
    Redundancy Model 1.3.6.1.2.1.2.2.34.13.(0-32)
    Include Interface ID 1.3.6.1.2.1.2.2.34.14.(0-32)
    Client ASP State 1.3.6.1.2.1.2.2.34.15.(0-32)
    Server ASP State 1.3.6.1.2.1.2.2.34.16.(0-32)
    Tbeat 1.3.6.1.2.1.2.2.34.17.(0-32)
    TACK 1.3.6.1.2.1.2.2.34.18.(0-32)
    Routing Keys 1.3.6.1.2.1.2.2.34.19.(0-32)
    Req Stack 1.3.6.1.2.1.2.2.34.20.(0-32)
    Req Local RK IDs 1.3.6.1.2.1.2.2.34.21.(0-32)
    Resp Stack 1.3.6.1.2.1.2.2.34.22.(0-32)
    Resp Status 1.3.6.1.2.1.2.2.34.23.(0-32)
    Resp Local RK IDs 1.3.6.1.2.1.2.2.34.24.(0-32)
    Resp Routing Contexts 1.3.6.1.2.1.2.2.34.25.(0-32)
    Description 1.3.6.1.2.1.2.2.34.26.(0-32)
    Options 1.3.6.1.2.1.2.2.34.27.(0-32)
    Location 1.3.6.1.2.1.2.2.34.28.(0-32)
    AspActive 1.3.6.1.2.1.2.2.34.29.(0-32)
    Send 1.3.6.1.2.1.2.2.34.30.(0-32)
    Cisco Channel ID 1.3.6.1.2.1.2.2.34.31.(0-32)
    Tx Msg Total 1.3.6.1.2.1.2.2.34.32.(0-32)
    Tx Msg/Sec 1.3.6.1.2.1.2.2.34.33.(0-32)
    Tx Msg/Sec Max 1.3.6.1.2.1.2.2.34.34.(0-32)
    Rx Msg Total 1.3.6.1.2.1.2.2.34.35.(0-32)
    Rx Msg/Sec 1.3.6.1.2.1.2.2.34.36.(0-32)
    Rx Msg/Sec Max 1.3.6.1.2.1.2.2.34.37.(0-32)
    Tx Byte Total 1.3.6.1.2.1.2.2.34.38.(0-32)
    Tx Byte/Sec 1.3.6.1.2.1.2.2.34.39.(0-32)
    Tx Byte/Sec Max 1.3.6.1.2.1.2.2.34.40.(0-32)
    Rx Byte Total 1.3.6.1.2.1.2.2.34.41.(0-32)
    Rx Byte/Sec 1.3.6.1.2.1.2.2.34.42.(0-32)
    Rx Byte/Sec Max 1.3.6.1.2.1.2.2.34.43.(0-32)
    Rx Bytes/Sec Throttle 1.3.6.1.2.1.2.2.34.44.(0-32)
    Rx Msgs/Sec Throttle 1.3.6.1.2.1.2.2.34.45.(0-32)
    Rx Bytes/Sec MaxQueue 1.3.6.1.2.1.2.2.34.46.(0-32)

 */