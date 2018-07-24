<?php

namespace OSS_SNMP\MIBS\Squire\STP\v12;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractSctp;

class Sctp extends AbstractSctp
{

	const OID_BASE                              = '.1.3.6.1.2.1.2.2.33';

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
    status 1.3.6.1.2.1.2.2.33.0.(0-32)
    Type 1.3.6.1.2.1.2.2.33.1.(0-32)
    flags 1.3.6.1.2.1.2.2.33.2.(0-32)
    ASP 1.3.6.1.2.1.2.2.33.3.(0-32)
    local port 1.3.6.1.2.1.2.2.33.4.(0-32)
    local address 1.3.6.1.2.1.2.2.33.5.(0-32)
    remote port 1.3.6.1.2.1.2.2.33.6.(0-32)
    remote address 1.3.6.1.2.1.2.2.33.7.(0-32)
    Outgoing Streams 1.3.6.1.2.1.2.2.33.8.(0-32)
    Incoming Streams 1.3.6.1.2.1.2.2.33.9.(0-32)
    End 1.3.6.1.2.1.2.2.33.10.(0-32)
    Protocol 1.3.6.1.2.1.2.2.33.11.(0-32)
    IP 1.3.6.1.2.1.2.2.33.12.(0-32)
    Inservice 1.3.6.1.2.1.2.2.33.13.(0-32)
    Outservice 1.3.6.1.2.1.2.2.33.14.(0-32)
    Restart On Failure 1.3.6.1.2.1.2.2.33.15.(0-32)
    Redundancy Model 1.3.6.1.2.1.2.2.33.16.(0-32)
    Multi-homed local address 1.3.6.1.2.1.2.2.33.17.(0-32)
    Multi-homed remote address 1.3.6.1.2.1.2.2.33.18.(0-32)
    RUDP Checksum 1.3.6.1.2.1.2.2.33.19.(0-32)
    RUDP Option 1.3.6.1.2.1.2.2.33.20.(0-32)
    RUDP Msegsize 1.3.6.1.2.1.2.2.33.21.(0-32)
    RUDP Trt 1.3.6.1.2.1.2.2.33.22.(0-32)
    RUDP Tcack 1.3.6.1.2.1.2.2.33.23.(0-32)
    RUDP Tnull 1.3.6.1.2.1.2.2.33.24.(0-32)
    RUDP Ttrans 1.3.6.1.2.1.2.2.33.25.(0-32)
    RUDP Mretrans 1.3.6.1.2.1.2.2.33.26.(0-32)
    RUDP Mcumack 1.3.6.1.2.1.2.2.33.27.(0-32)
    RUDP Moutseq 1.3.6.1.2.1.2.2.33.28.(0-32)
    RUDP OosBufSz 1.3.6.1.2.1.2.2.33.29.(0-32)
    RUDP Mautoreset 1.3.6.1.2.1.2.2.33.30.(0-32)
    RUDP Negotiate 1.3.6.1.2.1.2.2.33.31.(0-32)
    SCTP State 1.3.6.1.2.1.2.2.33.32.(0-32)
    Description 1.3.6.1.2.1.2.2.33.33.(0-32)
    SCTP Tmax 1.3.6.1.2.1.2.2.33.34.(0-32)
    SCTP Heartbeat 1.3.6.1.2.1.2.2.33.35.(0-32)
    SCTP Max Retry 1.3.6.1.2.1.2.2.33.36.(0-32)
    Congestion State 1.3.6.1.2.1.2.2.33.37.(0-32)
    fd 1.3.6.1.2.1.2.2.33.38.(0-32)
    sktfd 1.3.6.1.2.1.2.2.33.39.(0-32)
    No Delay 1.3.6.1.2.1.2.2.33.40.(0-32)
    Options 1.3.6.1.2.1.2.2.33.41.(0-32)
    Location 1.3.6.1.2.1.2.2.33.42.(0-32)
    Tx Msg Total 1.3.6.1.2.1.2.2.33.43.(0-32)
    Tx Msg/Sec 1.3.6.1.2.1.2.2.33.44.(0-32)
    Tx Msg/Sec Max 1.3.6.1.2.1.2.2.33.45.(0-32)
    Rx Msg Total 1.3.6.1.2.1.2.2.33.46.(0-32)
    Rx Msg/Sec 1.3.6.1.2.1.2.2.33.47.(0-32)
    Rx Msg/Sec Max 1.3.6.1.2.1.2.2.33.48.(0-32)
    Tx Bytes Total 1.3.6.1.2.1.2.2.33.49.(0-32)
    Tx Bytes/Sec 1.3.6.1.2.1.2.2.33.50.(0-32)
    Tx Bytes/Sec Max 1.3.6.1.2.1.2.2.33.51.(0-32)
    Rx Bytes Total 1.3.6.1.2.1.2.2.33.52.(0-32)
    Rx Bytes/Sec 1.3.6.1.2.1.2.2.33.53.(0-32)
    Rx Bytes/Sec Max 1.3.6.1.2.1.2.2.33.54.(0-32)
    Rx Bytes/Sec Throttle 1.3.6.1.2.1.2.2.33.55.(0-32)
    Rx Msgs/Sec Throttle 1.3.6.1.2.1.2.2.33.56.(0-32)
    Rx Bytes/Sec MaxQueue 1.3.6.1.2.1.2.2.33.57.(0-32)
    Tx Bytes/Sec Throttle 1.3.6.1.2.1.2.2.33.58.(0-32)
    Tx Msgs/Sec Throttle 1.3.6.1.2.1.2.2.33.59.(0-32)
    Tx Bytes/Sec MaxQueue 1.3.6.1.2.1.2.2.33.60.(0-32)
    Tx Bytes Binned 1.3.6.1.2.1.2.2.33.61.(0-32)
    Tx Bytes Cong 1.3.6.1.2.1.2.2.33.62.(0-32)
    Tx Bytes Cong Count 1.3.6.1.2.1.2.2.33.63.(0-32)
    Rx Bytes Binned 1.3.6.1.2.1.2.2.33.64.(0-32)
    Rx Bytes Cong 1.3.6.1.2.1.2.2.33.65.(0-32)
    Rx Bytes Cong Count 1.3.6.1.2.1.2.2.33.66.(0-32)

 */