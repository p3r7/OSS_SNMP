<?php

namespace OSS_SNMP\MIBS\Squire\STP\v10;

use OSS_SNMP\MIBS\Squire\STP\generic\AbstractStatistics;

class Statistics extends AbstractStatistics
{

	const OID_BASE                              = '.1.3.6.1.2.1.2.2.59';

    const OID_STATUS                            = '0';
	const OID_FLAGS                             = '1';

	const OID_OPTIONS                           = '2';

	const OID_CONGESTION                        = '3';

	const OID_RETRANSMISSION_QUEUE              = '4';
	const OID_RETRANSMISSION_QUEUE_MAX          = '5';

	const OID_T_SAMPLE                          = '6';

	const OID_COUNT_TOTAL                       = '7';
	const OID_COUNT_NOW                         = '8';
	const OID_COUNT_MIN                         = '9';
	const OID_COUNT_MAX                         = '10';
	const OID_COUNT_SAMPLE                      = '11';
	const OID_COUNT_LICENSE                     = '12';
	const OID_COUNT_THROTTLE                    = '13';

	const OID_THROUGHPUT_TOTAL                  = '14';
	const OID_THROUGHPUT_NOW                    = '15';
	const OID_THROUGHPUT_MIN                    = '16';
	const OID_THROUGHPUT_MAX                    = '17';
	const OID_THROUGHPUT_SAMPLE                 = '18';
	const OID_THROUGHPUT_LICENSE                = '19';
	const OID_THROUGHPUT_THROTTLE               = '20';

	const OID_THROTTLE                          = '21';

	const OID_DESCRIPTION                       = '22';


}

/*

>show snmp stat
SNMP OID for Statistics 1.3.6.1.2.1.2.2.59
    status 1.3.6.1.2.1.2.2.59.0.(0-200)
    flags 1.3.6.1.2.1.2.2.59.1.(0-200)
    Options 1.3.6.1.2.1.2.2.59.2.(0-200)
    Congestion 1.3.6.1.2.1.2.2.59.3.(0-200)
    Retransmission Queue 1.3.6.1.2.1.2.2.59.4.(0-200)
    Retransmission Queue Maximum 1.3.6.1.2.1.2.2.59.5.(0-200)
    Tsample 1.3.6.1.2.1.2.2.59.6.(0-200)
    Count Total 1.3.6.1.2.1.2.2.59.7.(0-200)
    Count Now 1.3.6.1.2.1.2.2.59.8.(0-200)
    Count Min 1.3.6.1.2.1.2.2.59.9.(0-200)
    Count Max 1.3.6.1.2.1.2.2.59.10.(0-200)
    Count Sample 1.3.6.1.2.1.2.2.59.11.(0-200)
    Count License 1.3.6.1.2.1.2.2.59.12.(0-200)
    Count Throttle 1.3.6.1.2.1.2.2.59.13.(0-200)
    Throughput Total 1.3.6.1.2.1.2.2.59.14.(0-200)
    Throughput Now 1.3.6.1.2.1.2.2.59.15.(0-200)
    Throughput Min 1.3.6.1.2.1.2.2.59.16.(0-200)
    Throughput Max 1.3.6.1.2.1.2.2.59.17.(0-200)
    Throughput Sample 1.3.6.1.2.1.2.2.59.18.(0-200)
    Throughput License 1.3.6.1.2.1.2.2.59.19.(0-200)
    Throughput Throttle 1.3.6.1.2.1.2.2.59.20.(0-200)
    Tthrottle 1.3.6.1.2.1.2.2.59.21.(0-200)
    Description 1.3.6.1.2.1.2.2.59.22.(0-200)

 */