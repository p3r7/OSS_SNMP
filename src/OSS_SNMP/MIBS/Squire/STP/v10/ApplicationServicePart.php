<?php

namespace OSS_SNMP\MIBS\Squire\STP\v10;

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
    status 1.3.6.1.2.1.2.2.34.0.(0-128)
    flags 1.3.6.1.2.1.2.2.34.1.(0-128)
    Originating Point 1.3.6.1.2.1.2.2.34.2.(0-128)
    Type 1.3.6.1.2.1.2.2.34.3.(0-128)
    IsupIP 1.3.6.1.2.1.2.2.34.4.(0-128)
    SCTP 1.3.6.1.2.1.2.2.34.5.(0-128)
    Identifier 1.3.6.1.2.1.2.2.34.6.(0-128)
    Protocol 1.3.6.1.2.1.2.2.34.7.(0-128)
    End 1.3.6.1.2.1.2.2.34.8.(0-128)
    As 1.3.6.1.2.1.2.2.34.9.(0-128)
    Inservice 1.3.6.1.2.1.2.2.34.10.(0-128)
    Outservice 1.3.6.1.2.1.2.2.34.11.(0-128)
    Debug 1.3.6.1.2.1.2.2.34.12.(0-128)
    Redundancy Model 1.3.6.1.2.1.2.2.34.13.(0-128)
    Include Interface ID 1.3.6.1.2.1.2.2.34.14.(0-128)
    Client ASP State 1.3.6.1.2.1.2.2.34.15.(0-128)
    Server ASP State 1.3.6.1.2.1.2.2.34.16.(0-128)
    Tbeat 1.3.6.1.2.1.2.2.34.17.(0-128)
    TACK 1.3.6.1.2.1.2.2.34.18.(0-128)
    Routing Keys 1.3.6.1.2.1.2.2.34.19.(0-128)
    Req Stack 1.3.6.1.2.1.2.2.34.20.(0-128)
    Req Local RK IDs 1.3.6.1.2.1.2.2.34.21.(0-128)
    Resp Stack 1.3.6.1.2.1.2.2.34.22.(0-128)
    Resp Status 1.3.6.1.2.1.2.2.34.23.(0-128)
    Resp Local RK IDs 1.3.6.1.2.1.2.2.34.24.(0-128)
    Resp Routing Contexts 1.3.6.1.2.1.2.2.34.25.(0-128)
    Description 1.3.6.1.2.1.2.2.34.26.(0-128)
    Options 1.3.6.1.2.1.2.2.34.27.(0-128)

 */