<?php

namespace OSS_SNMP\MIBS\Squire\STP\v8;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractSignalingLink;

class SignalingLink extends AbstractSignalingLink
{
    const OID_BASE                              = '.1.3.6.1.2.1.2.2.3';

    const OID_STATUS                            = '0';
	const OID_FLAGS                             = '1';
	const OID_TYPE                              = '2';
	const OID_MAP                               = '3';
	const OID_CARD                              = '4';
	const OID_INTERFACE                         = '5';

	const OID_CHANNEL_ID                        = '6';
	const OID_TRUNK                             = '7';
	const OID_TIMESLOT                          = '8';
	const OID_SLC                               = '9';
	const OID_ORIGINATING                       = '10';
	const OID_LINKSET                           = '11';
	const OID_INTERFACE_ID                      = '12';
	const OID_AS                                = '13';
	const OID_STREAM                            = '14';
	const OID_IN_SERVICE                        = '15';
	const OID_OUT_SERVICE                       = '16';
	const OID_SLT_TYPE                          = '17';
	const OID_L2_TASK                           = '18';
	const OID_FORCE_NORMAL                      = '19';
	const OID_SET_LPO                           = '20';
	const OID_SET_LPR                           = '21';
	const OID_INHIBIT                           = '22';
	const OID_UNINHIBIT                         = '23';
	const OID_DEBUG                             = '24';
	const OID_PROTOCOL                          = '25';
	const OID_SLTM                              = '26';
	const OID_VARIANT                           = '27';
	const OID_LI_PRIORITY_BIT                   = '28';
	const OID_TRANSMISSION_RATE                 = '29';
	const OID_MAX_THROUGHPUT                    = '30';
	const OID_QUEUE_SIZE                        = '31';

	const OID_TX_MSU_TOTAL                      = '32';
	const OID_TX_MSU_SEC                        = '33';
	const OID_TX_MSU_SEC_MAX                    = '34';
	const OID_RX_MSU_TOTAL                      = '35';
	const OID_RX_MSU_SEC                        = '36';
	const OID_RX_MSU_SEC_MAX                    = '37';

	const OID_TX_BITS_TOTAL                     = '38';
	const OID_TX_BITS_SEC                       = '39';
	const OID_TX_BITS_SEC_MAX                   = '40';
	const OID_RX_BITS_TOTAL                     = '41';
	const OID_RX_BITS_SEC                       = '42';
	const OID_RX_BITS_SEC_MAX                   = '43';

	const OID_DESCRIPTION                       = '44';
	const OID_OPTIONS                           = '45';
}

/*

>show snmp sl
SNMP OID for Signalling Link 1.3.6.1.2.1.2.2.3
    status 1.3.6.1.2.1.2.2.3.0.(0-26)
    flags 1.3.6.1.2.1.2.2.3.1.(0-26)
    Type 1.3.6.1.2.1.2.2.3.2.(0-26)
    Map 1.3.6.1.2.1.2.2.3.3.(0-26)
    Card 1.3.6.1.2.1.2.2.3.4.(0-26)
    Interface 1.3.6.1.2.1.2.2.3.5.(0-26)
    ChannelId 1.3.6.1.2.1.2.2.3.6.(0-26)
    Trunk 1.3.6.1.2.1.2.2.3.7.(0-26)
    timeslot 1.3.6.1.2.1.2.2.3.8.(0-26)
    slc 1.3.6.1.2.1.2.2.3.9.(0-26)
    Originating 1.3.6.1.2.1.2.2.3.10.(0-26)
    Linkset 1.3.6.1.2.1.2.2.3.11.(0-26)
    Interface ID 1.3.6.1.2.1.2.2.3.12.(0-26)
    AS 1.3.6.1.2.1.2.2.3.13.(0-26)
    Stream 1.3.6.1.2.1.2.2.3.14.(0-26)
    Inservice 1.3.6.1.2.1.2.2.3.15.(0-26)
    Outservice 1.3.6.1.2.1.2.2.3.16.(0-26)
    SLT Type 1.3.6.1.2.1.2.2.3.17.(0-26)
    L2 Task 1.3.6.1.2.1.2.2.3.18.(0-26)
    Force Normal 1.3.6.1.2.1.2.2.3.19.(0-26)
    Set LPO 1.3.6.1.2.1.2.2.3.20.(0-26)
    Set LPR 1.3.6.1.2.1.2.2.3.21.(0-26)
    inhibit 1.3.6.1.2.1.2.2.3.22.(0-26)
    uninhibit 1.3.6.1.2.1.2.2.3.23.(0-26)
    Debug 1.3.6.1.2.1.2.2.3.24.(0-26)
    Protocol 1.3.6.1.2.1.2.2.3.25.(0-26)
    SLTM 1.3.6.1.2.1.2.2.3.26.(0-26)
    variant 1.3.6.1.2.1.2.2.3.27.(0-26)
    LI Priority Bit 1.3.6.1.2.1.2.2.3.28.(0-26)
    Transmission Rate 1.3.6.1.2.1.2.2.3.29.(0-26)
    Max Throughput 1.3.6.1.2.1.2.2.3.30.(0-26)
    Queue Size 1.3.6.1.2.1.2.2.3.31.(0-26)
    Tx MSU Total 1.3.6.1.2.1.2.2.3.32.(0-26)
    Tx MSU Sec 1.3.6.1.2.1.2.2.3.33.(0-26)
    Tx MSU Sec max 1.3.6.1.2.1.2.2.3.34.(0-26)
    Rx MSU Total 1.3.6.1.2.1.2.2.3.35.(0-26)
    Rx MSU Sec 1.3.6.1.2.1.2.2.3.36.(0-26)
    Rx MSU Sec max 1.3.6.1.2.1.2.2.3.37.(0-26)
    Tx Bits Total 1.3.6.1.2.1.2.2.3.38.(0-26)
    Tx Bits Sec 1.3.6.1.2.1.2.2.3.39.(0-26)
    Tx Bits Sec max 1.3.6.1.2.1.2.2.3.40.(0-26)
    Rx Bits Total 1.3.6.1.2.1.2.2.3.41.(0-26)
    Rx Bits Sec 1.3.6.1.2.1.2.2.3.42.(0-26)
    Rx Bits Sec max 1.3.6.1.2.1.2.2.3.43.(0-26)
    Description 1.3.6.1.2.1.2.2.3.44.(0-26)
    Options 1.3.6.1.2.1.2.2.3.45.(0-26)

 */