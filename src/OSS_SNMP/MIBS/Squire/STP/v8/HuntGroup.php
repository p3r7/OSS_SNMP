<?php

namespace OSS_SNMP\MIBS\Squire\STP\v8;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractHuntGroup;

class HuntGroup extends AbstractHuntGroup
{

    const OID_BASE                              = '1.3.6.1.2.1.2.2.17';

    const OID_STATUS                            = '0';
    const OID_TYPE                              = '1';
    const OID_FLAGS                             = '2';

    const OID_SETUP_TOTAL                       = '3';
    const OID_RINGING_TOTAL                     = '4';
    const OID_ANSWER_TOTAL                      = '5';
    const OID_CONGESTION_TOTAL                  = '6';

    const OID_TOTAL_MINUTES                     = '7';

    const OID_ACTIVE_CALLS                      = '8';
    const OID_ACTIVE_INBOUND                    = '9';

    const OID_ACD                               = '10';
    const OID_PDD                               = '11';
    const OID_ASR                               = '12';

    const OID_POS                               = '13';

    const OID_ODD_EVEN                          = '14';

    const OID_RETRY_COUNT                       = '15';
    const OID_RETRY_CAUSE                       = '16';
    const OID_ADD_RETRY_CAUSE                   = '17';
    const OID_ADD_RETRY_CAUSE_2                 = '18';

    const OID_CONGESTION_TIMER                  = '19';

    const OID_ADD_VOIP_DEST                     = '20';
    const OID_ADD_VOIP_DEST_2                   = '21';

    const OID_VOIP_LOW                          = '22';
    const OID_VOIP_HIGH                         = '23';

    const OID_ALGORITHM                         = '24';

    const OID_ADD_CIRCUITS                      = '25';
    const OID_CIRCUITS                          = '26';

    const OID_MATCH_DB                          = '27';
    const OID_LCR_DB                            = '28';

    const OID_MAX_CALLS                         = '29';
    const OID_MAX_INBOUND                       = '30';
    const OID_MAX_TRAFFIC                       = '21';

    const OID_CDR_MAP                           = '32';

    const OID_AAA_ACCOUNTING_NAME               = '33';

    const OID_PARTNER                           = '34';

    const OID_ADD_VOICE_ANNOUNCEMENT            = '35';

    const OID_NAS                               = '36';

    const OID_DESCRIPTION                       = '37';

    const OID_REDIRECT_ADDR                     = '38';

    const OID_OPTIONS                           = '39';

    const OID_CODECS                            = '40';
    const OID_ADD_CODEC                         = '41';
    const OID_ADD_CODEC_2                       = '42';


}

/*

>show snmp hg
SNMP OID for Hunt Group 1.3.6.1.2.1.2.2.17
    status 1.3.6.1.2.1.2.2.17.0.(0-1000)
    Type 1.3.6.1.2.1.2.2.17.1.(0-1000)
    flags 1.3.6.1.2.1.2.2.17.2.(0-1000)
    Setup Total 1.3.6.1.2.1.2.2.17.3.(0-1000)
    Ringing Total 1.3.6.1.2.1.2.2.17.4.(0-1000)
    Answer Total 1.3.6.1.2.1.2.2.17.5.(0-1000)
    Congestion Total 1.3.6.1.2.1.2.2.17.6.(0-1000)
    Total Minutes 1.3.6.1.2.1.2.2.17.7.(0-1000)
    Active Calls 1.3.6.1.2.1.2.2.17.8.(0-1000)
    Active Inbound 1.3.6.1.2.1.2.2.17.9.(0-1000)
    ACD 1.3.6.1.2.1.2.2.17.10.(0-1000)
    PDD 1.3.6.1.2.1.2.2.17.11.(0-1000)
    ASR 1.3.6.1.2.1.2.2.17.12.(0-1000)
    pos 1.3.6.1.2.1.2.2.17.13.(0-1000)
    OddEven 1.3.6.1.2.1.2.2.17.14.(0-1000)
    RetryCount 1.3.6.1.2.1.2.2.17.15.(0-1000)
    RetryCause 1.3.6.1.2.1.2.2.17.16.(0-1000)
    AddRetryCause 1.3.6.1.2.1.2.2.17.17.(0-1000)
    Add RetryCause 1.3.6.1.2.1.2.2.17.18.(0-1000)
    CongestionTimer 1.3.6.1.2.1.2.2.17.19.(0-1000)
    AddVoIPDestination 1.3.6.1.2.1.2.2.17.20.(0-1000)
    Add VoIPDestination 1.3.6.1.2.1.2.2.17.21.(0-1000)
    VoIP Low 1.3.6.1.2.1.2.2.17.22.(0-1000)
    VoIP High 1.3.6.1.2.1.2.2.17.23.(0-1000)
    Algorithm 1.3.6.1.2.1.2.2.17.24.(0-1000)
    Add Circuits 1.3.6.1.2.1.2.2.17.25.(0-1000)
    Circuits 1.3.6.1.2.1.2.2.17.26.(0-1000)
    MatchDB 1.3.6.1.2.1.2.2.17.27.(0-1000)
    LCRDB 1.3.6.1.2.1.2.2.17.28.(0-1000)
    Maximum Calls 1.3.6.1.2.1.2.2.17.29.(0-1000)
    Maximum Inbound 1.3.6.1.2.1.2.2.17.30.(0-1000)
    Maximum Traffic 1.3.6.1.2.1.2.2.17.31.(0-1000)
    CDR map 1.3.6.1.2.1.2.2.17.32.(0-1000)
    AAA AccountingName 1.3.6.1.2.1.2.2.17.33.(0-1000)
    Partner 1.3.6.1.2.1.2.2.17.34.(0-1000)
    Add Voice Announcement 1.3.6.1.2.1.2.2.17.35.(0-1000)
    NAS 1.3.6.1.2.1.2.2.17.36.(0-1000)
    Description 1.3.6.1.2.1.2.2.17.37.(0-1000)
    Redirect Addr 1.3.6.1.2.1.2.2.17.38.(0-1000)
    Options 1.3.6.1.2.1.2.2.17.39.(0-1000)
    Codecs 1.3.6.1.2.1.2.2.17.40.(0-1000)
    AddCodec 1.3.6.1.2.1.2.2.17.41.(0-1000)
    Add Codec 1.3.6.1.2.1.2.2.17.42.(0-1000)

 */