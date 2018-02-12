<?php

namespace OSS_SNMP\MIBS\Squire\STP\v12;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractVoipStack;

class VoipStack extends AbstractVoipStack
{

	const OID_BASE                              = '1.3.6.1.2.1.2.2.26';

    const OID_STATUS                            = '0';
	const OID_FLAGS                             = '1';
	const OID_TYPE                              = '2';

	const OID_NAME                              = '3';
	const OID_ADDRESS                           = '4';
	const OID_SUBNET                            = '5';
	const OID_PORT                              = '6';

	const OID_IN_SERVICE                        = '36';
	const OID_OUT_SERVICE                       = '37';

	const OID_DESCRIPTION                       = '43';

	const OID_OPTIONS                           = '45';


}

/*

>show snmp voip stack
SNMP OID for VoIP Stack 1.3.6.1.2.1.2.2.26
    status 1.3.6.1.2.1.2.2.26.0.(0-512)
    flags 1.3.6.1.2.1.2.2.26.1.(0-512)
    Type 1.3.6.1.2.1.2.2.26.2.(0-512)
    name 1.3.6.1.2.1.2.2.26.3.(0-512)
    address 1.3.6.1.2.1.2.2.26.4.(0-512)
    subnet 1.3.6.1.2.1.2.2.26.5.(0-512)
    device 1.3.6.1.2.1.2.2.26.6.(0-512)
    pcap_filter 1.3.6.1.2.1.2.2.26.7.(0-512)
    port 1.3.6.1.2.1.2.2.26.8.(0-512)
    KeepAliveStart 1.3.6.1.2.1.2.2.26.9.(0-512)
    KeepAliveInterval 1.3.6.1.2.1.2.2.26.10.(0-512)
    KeepAliveCount 1.3.6.1.2.1.2.2.26.11.(0-512)
    pcapSpeedMultiplier 1.3.6.1.2.1.2.2.26.12.(0-512)
    IpSocket 1.3.6.1.2.1.2.2.26.13.(0-512)
    FastStart 1.3.6.1.2.1.2.2.26.14.(0-512)
    H245Tunneling 1.3.6.1.2.1.2.2.26.15.(0-512)
    H245Tunnelling 1.3.6.1.2.1.2.2.26.16.(0-512)
    H225MaintainConnection 1.3.6.1.2.1.2.2.26.17.(0-512)
    H225MultipleCalls 1.3.6.1.2.1.2.2.26.18.(0-512)
    H245FacilityPDU 1.3.6.1.2.1.2.2.26.19.(0-512)
    H225SendStartH245 1.3.6.1.2.1.2.2.26.20.(0-512)
    T35CountryCode 1.3.6.1.2.1.2.2.26.21.(0-512)
    T35Extension 1.3.6.1.2.1.2.2.26.22.(0-512)
    manufacturerCode 1.3.6.1.2.1.2.2.26.23.(0-512)
    H245TCSREJ 1.3.6.1.2.1.2.2.26.24.(0-512)
    H245StartPort 1.3.6.1.2.1.2.2.26.25.(0-512)
    H245EndPort 1.3.6.1.2.1.2.2.26.26.(0-512)
    GlobalKeepAliveInterval 1.3.6.1.2.1.2.2.26.27.(0-512)
    H323 Lost Packet Timeout 1.3.6.1.2.1.2.2.26.28.(0-512)
    H323 TPKT Recovery Timeout 1.3.6.1.2.1.2.2.26.29.(0-512)
    H323 Max Call Duration 1.3.6.1.2.1.2.2.26.30.(0-512)
    user=phone 1.3.6.1.2.1.2.2.26.31.(0-512)
    sipversion 1.3.6.1.2.1.2.2.26.32.(0-512)
    T1 1.3.6.1.2.1.2.2.26.33.(0-512)
    T2 1.3.6.1.2.1.2.2.26.34.(0-512)
    T4 1.3.6.1.2.1.2.2.26.35.(0-512)
    D 1.3.6.1.2.1.2.2.26.36.(0-512)
    Tb 1.3.6.1.2.1.2.2.26.37.(0-512)
    Tf 1.3.6.1.2.1.2.2.26.38.(0-512)
    Th 1.3.6.1.2.1.2.2.26.39.(0-512)
    Tj 1.3.6.1.2.1.2.2.26.40.(0-512)
    ForceSipExpiry 1.3.6.1.2.1.2.2.26.41.(0-512)
    SipExpiry 1.3.6.1.2.1.2.2.26.42.(0-512)
    Inservice 1.3.6.1.2.1.2.2.26.43.(0-512)
    Outservice 1.3.6.1.2.1.2.2.26.44.(0-512)
    Proxy Media 1.3.6.1.2.1.2.2.26.45.(0-512)
    Contact Header 1.3.6.1.2.1.2.2.26.46.(0-512)
    RPID Header 1.3.6.1.2.1.2.2.26.47.(0-512)
    Append CallID 1.3.6.1.2.1.2.2.26.48.(0-512)
    ExpiryGrace 1.3.6.1.2.1.2.2.26.49.(0-512)
    Description 1.3.6.1.2.1.2.2.26.50.(0-512)
    NAT Forwarding Address 1.3.6.1.2.1.2.2.26.51.(0-512)
    Contact Address 1.3.6.1.2.1.2.2.26.52.(0-512)
    Contact Port 1.3.6.1.2.1.2.2.26.53.(0-512)
    Options 1.3.6.1.2.1.2.2.26.54.(0-512)
    transport 1.3.6.1.2.1.2.2.26.55.(0-512)
    Max Forwards 1.3.6.1.2.1.2.2.26.56.(0-512)
    ReInvite renegotiate 1.3.6.1.2.1.2.2.26.57.(0-512)
    ISUP Version 1.3.6.1.2.1.2.2.26.58.(0-512)
    ISUP Base Version 1.3.6.1.2.1.2.2.26.59.(0-512)
    Default Address 1.3.6.1.2.1.2.2.26.60.(0-512)
    Retransmits 1.3.6.1.2.1.2.2.26.61.(0-512)
    SVIRoute Priority 1.3.6.1.2.1.2.2.26.62.(0-512)
    SIP-I handling-parm 1.3.6.1.2.1.2.2.26.63.(0-512)
    URI Type 1.3.6.1.2.1.2.2.26.64.(0-512)
    TLS Credentials 1.3.6.1.2.1.2.2.26.65.(0-512)
    Rx Stats Register 1.3.6.1.2.1.2.2.26.66.(0-512)
    Stateless Proxy Methods 1.3.6.1.2.1.2.2.26.67.(0-512)
    SIP-I Charge Message 1.3.6.1.2.1.2.2.26.68.(0-512)
    Tx Invite Req 1.3.6.1.2.1.2.2.26.69.(0-512)
    Tx Cancel Req 1.3.6.1.2.1.2.2.26.70.(0-512)
    Tx Bye Req 1.3.6.1.2.1.2.2.26.71.(0-512)
    Tx Options Req 1.3.6.1.2.1.2.2.26.72.(0-512)
    Tx Ack Req 1.3.6.1.2.1.2.2.26.73.(0-512)
    Tx Info Req 1.3.6.1.2.1.2.2.26.74.(0-512)
    Tx Subscribe Req 1.3.6.1.2.1.2.2.26.75.(0-512)
    Tx Register Req 1.3.6.1.2.1.2.2.26.76.(0-512)
    Tx Notify Req 1.3.6.1.2.1.2.2.26.77.(0-512)
    Tx Prack Req 1.3.6.1.2.1.2.2.26.78.(0-512)
    Tx Refer Req 1.3.6.1.2.1.2.2.26.79.(0-512)
    Tx Update Req 1.3.6.1.2.1.2.2.26.80.(0-512)
    Tx Publish Req 1.3.6.1.2.1.2.2.26.81.(0-512)
    Tx Message Req 1.3.6.1.2.1.2.2.26.82.(0-512)
    Tx Invite Rsp 1.3.6.1.2.1.2.2.26.83.(0-512)
    Tx Cancel Rsp 1.3.6.1.2.1.2.2.26.84.(0-512)
    Tx Bye Rsp 1.3.6.1.2.1.2.2.26.85.(0-512)
    Tx Options Rsp 1.3.6.1.2.1.2.2.26.86.(0-512)
    Tx Ack Rsp 1.3.6.1.2.1.2.2.26.87.(0-512)
    Tx Info Rsp 1.3.6.1.2.1.2.2.26.88.(0-512)
    Tx Subscribe Rsp 1.3.6.1.2.1.2.2.26.89.(0-512)
    Tx Register Rsp 1.3.6.1.2.1.2.2.26.90.(0-512)
    Tx Notify Rsp 1.3.6.1.2.1.2.2.26.91.(0-512)
    Tx Prack Rsp 1.3.6.1.2.1.2.2.26.92.(0-512)
    Tx Refer Rsp 1.3.6.1.2.1.2.2.26.93.(0-512)
    Tx Update Rsp 1.3.6.1.2.1.2.2.26.94.(0-512)
    Tx Publish Rsp 1.3.6.1.2.1.2.2.26.95.(0-512)
    Tx Message Rsp 1.3.6.1.2.1.2.2.26.96.(0-512)
    Rx Invite Req 1.3.6.1.2.1.2.2.26.97.(0-512)
    Rx Cancel Req 1.3.6.1.2.1.2.2.26.98.(0-512)
    Rx Bye Req 1.3.6.1.2.1.2.2.26.99.(0-512)
    Rx Options Req 1.3.6.1.2.1.2.2.26.100.(0-512)
    Rx Ack Req 1.3.6.1.2.1.2.2.26.101.(0-512)
    Rx Info Req 1.3.6.1.2.1.2.2.26.102.(0-512)
    Rx Subscribe Req 1.3.6.1.2.1.2.2.26.103.(0-512)
    Rx Register Req 1.3.6.1.2.1.2.2.26.104.(0-512)
    Rx Notify Req 1.3.6.1.2.1.2.2.26.105.(0-512)
    Rx Prack Req 1.3.6.1.2.1.2.2.26.106.(0-512)
    Rx Refer Req 1.3.6.1.2.1.2.2.26.107.(0-512)
    Rx Update Req 1.3.6.1.2.1.2.2.26.108.(0-512)
    Rx Publish Req 1.3.6.1.2.1.2.2.26.109.(0-512)
    Rx Message Req 1.3.6.1.2.1.2.2.26.110.(0-512)
    Rx Invite Rsp 1.3.6.1.2.1.2.2.26.111.(0-512)
    Rx Cancel Rsp 1.3.6.1.2.1.2.2.26.112.(0-512)
    Rx Bye Rsp 1.3.6.1.2.1.2.2.26.113.(0-512)
    Rx Options Rsp 1.3.6.1.2.1.2.2.26.114.(0-512)
    Rx Ack Rsp 1.3.6.1.2.1.2.2.26.115.(0-512)
    Rx Info Rsp 1.3.6.1.2.1.2.2.26.116.(0-512)
    Rx Subscribe Rsp 1.3.6.1.2.1.2.2.26.117.(0-512)
    Rx Register Rsp 1.3.6.1.2.1.2.2.26.118.(0-512)
    Rx Notify Rsp 1.3.6.1.2.1.2.2.26.119.(0-512)
    Rx Prack Rsp 1.3.6.1.2.1.2.2.26.120.(0-512)
    Rx Refer Rsp 1.3.6.1.2.1.2.2.26.121.(0-512)
    Rx Update Rsp 1.3.6.1.2.1.2.2.26.122.(0-512)
    Rx Publish Rsp 1.3.6.1.2.1.2.2.26.123.(0-512)
    Rx Message Rsp 1.3.6.1.2.1.2.2.26.124.(0-512)
    Interface 1.3.6.1.2.1.2.2.26.125.(0-512)
    Interfaces 1.3.6.1.2.1.2.2.26.126.(0-512)
    Outgoing SSME 1.3.6.1.2.1.2.2.26.127.(0-512)

 */