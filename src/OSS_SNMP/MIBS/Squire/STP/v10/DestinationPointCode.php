<?php

namespace OSS_SNMP\MIBS\Squire\STP\v10;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractDestinationPointCode;

class DestinationPointCode extends AbstractDestinationPointCode
{
    const OID_BASE = '.1.3.6.1.2.1.2.2.7';

    const OID_STATUS = '0';
	const OID_FLAGS = '1';
	const OID_TYPE = '2';
	const OID_ORIGINATING = '3';
	const OID_POINTCODE = '4';
	const OID_NI = '5';
	const OID_PRIMARY = '6';
	const OID_SECONDARY = '7';
	const OID_LOADSHARE = '8';
	const OID_TRANSFER_REPORT = '9';
	const OID_ADD_TRANSFER_REPORT = '10';
	const OID_IN_SERVICE = '11';
	const OID_OUT_SERVICE = '12';
	const OID_SLS = '13';
    const OID_CLINK = '14';
    const OID_DESCRIPTION = '15';
    const OID_MAX_MSG_PER_SECOND = '16';
    const OID_MSG_PER_SECOND = '17';
    const OID_R_QUE = '18';
    const OID_OPTIONS = '19';

    # version-specific
    const OID_ASP = '20';
    const OID_AS = '21';
}

/*

>show snmp dpc
SNMP OID for Destination Point 1.3.6.1.2.1.2.2.7
    status 1.3.6.1.2.1.2.2.7.0.(0-256)
    flags 1.3.6.1.2.1.2.2.7.1.(0-256)
    Type 1.3.6.1.2.1.2.2.7.2.(0-256)
    originating 1.3.6.1.2.1.2.2.7.3.(0-256)
    pointcode 1.3.6.1.2.1.2.2.7.4.(0-256)
    ni 1.3.6.1.2.1.2.2.7.5.(0-256)
    primary 1.3.6.1.2.1.2.2.7.6.(0-256)
    secondary 1.3.6.1.2.1.2.2.7.7.(0-256)
    loadshare 1.3.6.1.2.1.2.2.7.8.(0-256)
    Transfer Report 1.3.6.1.2.1.2.2.7.9.(0-256)
    Add Transfer Report 1.3.6.1.2.1.2.2.7.10.(0-256)
    Inservice 1.3.6.1.2.1.2.2.7.11.(0-256)
    Outservice 1.3.6.1.2.1.2.2.7.12.(0-256)
    sls 1.3.6.1.2.1.2.2.7.13.(0-256)
    clink 1.3.6.1.2.1.2.2.7.14.(0-256)
    Description 1.3.6.1.2.1.2.2.7.15.(0-256)
    Max msg/s 1.3.6.1.2.1.2.2.7.16.(0-256)
    Msg/s 1.3.6.1.2.1.2.2.7.17.(0-256)
    RQue 1.3.6.1.2.1.2.2.7.18.(0-256)
    Options 1.3.6.1.2.1.2.2.7.19.(0-256)
    ASP 1.3.6.1.2.1.2.2.7.20.(0-256)
    AS 1.3.6.1.2.1.2.2.7.21.(0-256)

 */