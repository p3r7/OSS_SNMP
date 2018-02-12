<?php

namespace OSS_SNMP\MIBS\Squire\STP\v10;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractSctp;

class Sctp extends AbstractSctp
{

	const OID_BASE                              = '1.3.6.1.2.1.2.2.33';

	const OID_STATUS                            = '0';
	const OID_FLAGS                             = '1';
	const OID_TYPE                              = '2';

	const OID_ASP                               = '3';
	const OID_LOCAL_PORT                        = '4';
	const OID_LOCAL_ADDRESS                     = '5';
	const OID_REMOTE_PORT                       = '6';
	const OID_REMOTE_ADDRESS                    = '7';

	const OID_OUTGOING_STREAMS                  = '8';
	const OID_INCOMING_STREAMS                  = '9';

	const OID_END                               = '10';

	const OID_PROTOCOL                          = '11';
	const OID_IP                                = '12';

	const OID_IN_SERVICE                        = '13';
	const OID_OUT_SERVICE                       = '14';

	const OID_DESCRIPTION                       = '33';

	const OID_OPTIONS                           = '41';
}

/*

>show snmp sctp
SNMP OID for SCTP 1.3.6.1.2.1.2.2.33
    status 1.3.6.1.2.1.2.2.33.0.(0-128)
    Type 1.3.6.1.2.1.2.2.33.1.(0-128)
    flags 1.3.6.1.2.1.2.2.33.2.(0-128)
    ASP 1.3.6.1.2.1.2.2.33.3.(0-128)
    local port 1.3.6.1.2.1.2.2.33.4.(0-128)
    local address 1.3.6.1.2.1.2.2.33.5.(0-128)
    remote port 1.3.6.1.2.1.2.2.33.6.(0-128)
    remote address 1.3.6.1.2.1.2.2.33.7.(0-128)
    Outgoing Streams 1.3.6.1.2.1.2.2.33.8.(0-128)
    Incoming Streams 1.3.6.1.2.1.2.2.33.9.(0-128)
    End 1.3.6.1.2.1.2.2.33.10.(0-128)
    Protocol 1.3.6.1.2.1.2.2.33.11.(0-128)
    IP 1.3.6.1.2.1.2.2.33.12.(0-128)
    Inservice 1.3.6.1.2.1.2.2.33.13.(0-128)
    Outservice 1.3.6.1.2.1.2.2.33.14.(0-128)
    Restart On Failure 1.3.6.1.2.1.2.2.33.15.(0-128)
    Redundancy Model 1.3.6.1.2.1.2.2.33.16.(0-128)
    Multi-homed local address 1.3.6.1.2.1.2.2.33.17.(0-128)
    Multi-homed remote address 1.3.6.1.2.1.2.2.33.18.(0-128)
    RUDP Checksum 1.3.6.1.2.1.2.2.33.19.(0-128)
    RUDP Option 1.3.6.1.2.1.2.2.33.20.(0-128)
    RUDP Msegsize 1.3.6.1.2.1.2.2.33.21.(0-128)
    RUDP Trt 1.3.6.1.2.1.2.2.33.22.(0-128)
    RUDP Tcack 1.3.6.1.2.1.2.2.33.23.(0-128)
    RUDP Tnull 1.3.6.1.2.1.2.2.33.24.(0-128)
    RUDP Ttrans 1.3.6.1.2.1.2.2.33.25.(0-128)
    RUDP Mretrans 1.3.6.1.2.1.2.2.33.26.(0-128)
    RUDP Mcumack 1.3.6.1.2.1.2.2.33.27.(0-128)
    RUDP Moutseq 1.3.6.1.2.1.2.2.33.28.(0-128)
    RUDP OosBufSz 1.3.6.1.2.1.2.2.33.29.(0-128)
    RUDP Mautoreset 1.3.6.1.2.1.2.2.33.30.(0-128)
    RUDP Negotiate 1.3.6.1.2.1.2.2.33.31.(0-128)
    SCTP State 1.3.6.1.2.1.2.2.33.32.(0-128)
    Description 1.3.6.1.2.1.2.2.33.33.(0-128)
    SCTP Tmax 1.3.6.1.2.1.2.2.33.34.(0-128)
    SCTP Heartbeat 1.3.6.1.2.1.2.2.33.35.(0-128)
    SCTP Max Retry 1.3.6.1.2.1.2.2.33.36.(0-128)
    Congestion State 1.3.6.1.2.1.2.2.33.37.(0-128)
    fd 1.3.6.1.2.1.2.2.33.38.(0-128)
    sktfd 1.3.6.1.2.1.2.2.33.39.(0-128)
    No Delay 1.3.6.1.2.1.2.2.33.40.(0-128)
    Options 1.3.6.1.2.1.2.2.33.41.(0-128)

 */