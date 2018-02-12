<?php

namespace OSS_SNMP\MIBS\Squire\STP\v12;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractDestinationPointCode;

class DestinationPointCode extends AbstractDestinationPointCode
{
    const OID_BASE = '.1.3.6.1.2.1.2.2.9';

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
    # NB: we have a shift of OIDs as compared to older version from this point on
    const OID_NETWORK_APPEARANCE = '14';
    const OID_CLINK = '15';
    const OID_DESCRIPTION = '16';
    const OID_MAX_MSG_PER_SECOND = '17';
    const OID_MSG_PER_SECOND = '18';
    const OID_R_QUE = '19';
    const OID_OPTIONS = '20';
}
