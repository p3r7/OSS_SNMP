<?php

namespace OSS_SNMP\MIBS\Squire\STP\v10;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractLinkSet;

class LinkSet extends AbstractLinkSet
{
    const OID_BASE                              = '1.3.6.1.2.1.2.2.8';

    const OID_STATUS                            = '0';
    const OID_FLAGS                             = '1';
    const OID_TYPE                              = '2';
    const OID_MAP                               = '3';

    const OID_ORIGINATING                       = '4';
    const OID_POINTCODE                         = '5';
    const OID_NI                                = '6';
    const OID_COMBINED                          = '7';
    const OID_IN_SERVICE                        = '8';
    const OID_OUT_SERVICE                       = '9';
    const OID_TFX_REQUIRED                      = '10';
    const OID_TRANSFER_REPORT                   = '11';
    const OID_ADD_TRANSFER_REPORT               = '12';
    const OID_ADD_MTP_ROUTES                    = '13';
    const OID_MTP_CDR                           = '14'; // specific to this version

    const OID_TX_MSU_TOTAL                      = '15';
    const OID_TX_MSU_SEC                        = '16';
    const OID_TX_MSU_SEC_MAX                    = '17';
    const OID_RX_MSU_TOTAL                      = '18';
    const OID_RX_MSU_SEC                        = '19';
    const OID_RX_MSU_SEC_MAX                    = '20';

    const OID_TX_BITS_TOTAL                     = '21';
    const OID_TX_BITS_SEC                       = '22';
    const OID_TX_BITS_SEC_MAX                   = '23';
    const OID_RX_BITS_TOTAL                     = '24';
    const OID_RX_BITS_SEC                       = '25';
    const OID_RX_BITS_SEC_MAX                   = '26';

    const OID_DESCRIPTION                       = '27';
    const OID_OPTIONS                           = '28';

	// version-specific
    const OID_COO_BIS                           = '29';
}

/*

>show snmp ls
SNMP OID for Linkset 1.3.6.1.2.1.2.2.8
    status 1.3.6.1.2.1.2.2.8.0.(0-32)
    flags 1.3.6.1.2.1.2.2.8.1.(0-32)
    Type 1.3.6.1.2.1.2.2.8.2.(0-32)
    Map 1.3.6.1.2.1.2.2.8.3.(0-32)
    Originating 1.3.6.1.2.1.2.2.8.4.(0-32)
    pointcode 1.3.6.1.2.1.2.2.8.5.(0-32)
    ni 1.3.6.1.2.1.2.2.8.6.(0-32)
    combined 1.3.6.1.2.1.2.2.8.7.(0-32)
    Inservice 1.3.6.1.2.1.2.2.8.8.(0-32)
    Outservice 1.3.6.1.2.1.2.2.8.9.(0-32)
    TFx Required 1.3.6.1.2.1.2.2.8.10.(0-32)
    Transfer Report 1.3.6.1.2.1.2.2.8.11.(0-32)
    Add Transfer Report 1.3.6.1.2.1.2.2.8.12.(0-32)
    Add MTP Routes 1.3.6.1.2.1.2.2.8.13.(0-32)
    MTP CDR 1.3.6.1.2.1.2.2.8.14.(0-32)
    Tx MSU Total 1.3.6.1.2.1.2.2.8.15.(0-32)
    Tx MSU Sec 1.3.6.1.2.1.2.2.8.16.(0-32)
    Tx MSU Sec max 1.3.6.1.2.1.2.2.8.17.(0-32)
    Rx MSU Total 1.3.6.1.2.1.2.2.8.18.(0-32)
    Rx MSU Sec 1.3.6.1.2.1.2.2.8.19.(0-32)
    Rx MSU Sec max 1.3.6.1.2.1.2.2.8.20.(0-32)
    Tx Bits Total 1.3.6.1.2.1.2.2.8.21.(0-32)
    Tx Bits Sec 1.3.6.1.2.1.2.2.8.22.(0-32)
    Tx Bits Sec max 1.3.6.1.2.1.2.2.8.23.(0-32)
    Rx Bits Total 1.3.6.1.2.1.2.2.8.24.(0-32)
    Rx Bits Sec 1.3.6.1.2.1.2.2.8.25.(0-32)
    Rx Bits Sec max 1.3.6.1.2.1.2.2.8.26.(0-32)
    Description 1.3.6.1.2.1.2.2.8.27.(0-32)
    Options 1.3.6.1.2.1.2.2.8.28.(0-32)
    COO Bis 1.3.6.1.2.1.2.2.8.29.(0-32)

 */