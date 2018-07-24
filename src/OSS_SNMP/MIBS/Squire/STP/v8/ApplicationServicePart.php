<?php

namespace OSS_SNMP\MIBS\Squire\STP\v8;

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
    status 1.3.6.1.2.1.2.2.34.0.(0-26)
    flags 1.3.6.1.2.1.2.2.34.1.(0-26)
    Originating Point 1.3.6.1.2.1.2.2.34.2.(0-26)
    Type 1.3.6.1.2.1.2.2.34.3.(0-26)
    IsupIP 1.3.6.1.2.1.2.2.34.4.(0-26)
    SCTP 1.3.6.1.2.1.2.2.34.5.(0-26)
    Identifier 1.3.6.1.2.1.2.2.34.6.(0-26)
    Protocol 1.3.6.1.2.1.2.2.34.7.(0-26)
    End 1.3.6.1.2.1.2.2.34.8.(0-26)
    As 1.3.6.1.2.1.2.2.34.9.(0-26)
    Inservice 1.3.6.1.2.1.2.2.34.10.(0-26)
    Outservice 1.3.6.1.2.1.2.2.34.11.(0-26)
    Debug 1.3.6.1.2.1.2.2.34.12.(0-26)
    Redundancy Model 1.3.6.1.2.1.2.2.34.13.(0-26)
    Include Interface ID 1.3.6.1.2.1.2.2.34.14.(0-26)
    Client ASP State 1.3.6.1.2.1.2.2.34.15.(0-26)
    Server ASP State 1.3.6.1.2.1.2.2.34.16.(0-26)
    Tbeat 1.3.6.1.2.1.2.2.34.17.(0-26)
    TACK 1.3.6.1.2.1.2.2.34.18.(0-26)
    Routing Keys 1.3.6.1.2.1.2.2.34.19.(0-26)
    Req Stack 1.3.6.1.2.1.2.2.34.20.(0-26)
    Req Local RK IDs 1.3.6.1.2.1.2.2.34.21.(0-26)
    Resp Stack 1.3.6.1.2.1.2.2.34.22.(0-26)
    Resp Status 1.3.6.1.2.1.2.2.34.23.(0-26)
    Resp Local RK IDs 1.3.6.1.2.1.2.2.34.24.(0-26)
    Resp Routing Contexts 1.3.6.1.2.1.2.2.34.25.(0-26)
    Description 1.3.6.1.2.1.2.2.34.26.(0-26)
    Options 1.3.6.1.2.1.2.2.34.27.(0-26)

 */