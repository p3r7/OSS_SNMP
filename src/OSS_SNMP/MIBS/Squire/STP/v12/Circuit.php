<?php

namespace OSS_SNMP\MIBS\Squire\STP\v12;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractCircuit;

class Circuit extends AbstractCircuit
{
    const OID_BASE = '1.3.6.1.2.1.2.2.4';

    const OID_STATUS = '0';
    const OID_FLAGS = '1';
    const OID_TYPE = '2';

    const OID_MAP = '3';

    const OID_INTERFACE = '4';
    const OID_CIC = '5';

    const OID_DIRECTION = '8';
    const OID_TIMESLOT = '9';

    const OID_CIRCUITGROUP = '11';

    const OID_CC_STATUS = '18';

    const OID_IN_SERVICE = '21';
    const OID_OUT_SERVICE = '22';

    const OID_DESCRIPTION = '23';
    const OID_OPTIONS = '24';
}

/*

>show snmp cct
SNMP OID for Circuit 1.3.6.1.2.1.2.2.4
    status 1.3.6.1.2.1.2.2.4.0.(0-3000)
    flags 1.3.6.1.2.1.2.2.4.1.(0-3000)
    Type 1.3.6.1.2.1.2.2.4.2.(0-3000)
    Map 1.3.6.1.2.1.2.2.4.3.(0-3000)
    interface 1.3.6.1.2.1.2.2.4.4.(0-3000)
    cic 1.3.6.1.2.1.2.2.4.5.(0-3000)
    controlling 1.3.6.1.2.1.2.2.4.6.(0-3000)
    actual controlling 1.3.6.1.2.1.2.2.4.7.(0-3000)
    Direction 1.3.6.1.2.1.2.2.4.8.(0-3000)
    timeslot 1.3.6.1.2.1.2.2.4.9.(0-3000)
    SetupTotal 1.3.6.1.2.1.2.2.4.10.(0-3000)
    circuitGroup 1.3.6.1.2.1.2.2.4.11.(0-3000)
    partner 1.3.6.1.2.1.2.2.4.12.(0-3000)
    Stack 1.3.6.1.2.1.2.2.4.13.(0-3000)
    CallControl 1.3.6.1.2.1.2.2.4.14.(0-3000)
    DCall 1.3.6.1.2.1.2.2.4.15.(0-3000)
    datalink 1.3.6.1.2.1.2.2.4.16.(0-3000)
    COT success 1.3.6.1.2.1.2.2.4.17.(0-3000)
    CCStatus 1.3.6.1.2.1.2.2.4.18.(0-3000)
    Initialise 1.3.6.1.2.1.2.2.4.19.(0-3000)
    Block State 1.3.6.1.2.1.2.2.4.20.(0-3000)
    Inservice 1.3.6.1.2.1.2.2.4.21.(0-3000)
    Outservice 1.3.6.1.2.1.2.2.4.22.(0-3000)
    Description 1.3.6.1.2.1.2.2.4.23.(0-3000)
    Options 1.3.6.1.2.1.2.2.4.24.(0-3000)
    send CVT 1.3.6.1.2.1.2.2.4.25.(0-3000)
    send CQM 1.3.6.1.2.1.2.2.4.26.(0-3000)

 */