<?php 

    $config = [
        'options' => [
            'gerar' => [
                'entre inteiros'
            ],
            'pessoa' => [
                'title',     // 'Ms.'
                'titleMale',                               // 'Mr.'
                'titleFemale',                               // 'Ms.'
                'suffix',                                    // 'Jr.'
                'name',      // 'Dr. Zane Stroman'
                'firstName', // 'Maynard'
                'firstNameMale',                             // 'Maynard'
                'firstNameFemale',                           // 'Rachel'
                'lastName',                                  // 'Zulauf''
                'cpf',
                'cnpj',
                'rg'
            ],
            'endereco' => [
                'cityPrefix',                          // 'Lake'
                'secondaryAddress',                    // 'Suite 961'
                'state',                               // 'NewMexico'
                'stateAbbr',                           // 'OH'
                'citySuffix',                          // 'borough'
                'streetSuffix',                        // 'Keys'
                'buildingNumber',                      // '484'
                'city',                                // 'West Judge'
                'streetName',                          // 'Keegan Trail'
                'streetAddress',                       // '439 Karley Loaf Suite 897'
                'postcode',                            // '17916'
                'address',                             // '8888 Cummings Vista Apt. 101, Susanbury, NY 95473'
                'country',                            // 'Falkland Islands (Malvinas)'
                'latitude',						     // 77.147489
                'longitude', 						// 86.211205
            ],
            'telefone' => [
                'phoneNumber',             // '201-886-0269 x3767'
                'tollFreePhoneNumber',     // '(888) 937-7238'
                'e164PhoneNumber',     // '+27113456789'
            ],
            'empresa' => [
                'catchPhrase',             // 'Monitored regional contingency'
                'bs',                      // 'e-enable robust architectures'
                'company',                 // 'Bogan-Treutel'
                'companySuffix',           // 'and Sons'
                'jobTitle',                // 'Cashier'
            ],
            'tempo' => [
                'unixTime',                // 58781813
                'dateTime', // DateTime('2008-04-25 08:37:17', 'UTC')
                'dateTimeAD', // DateTime('1800-04-29 20:38:49', 'Europe/Paris')
                'iso8601',                // '1978-12-09T10:10:29+0000'
                'date', // '1979-06-09'
                'time', // '20:49:42'
                'dateTimeBetween', // DateTime('2003-03-15 02:00:49', 'Africa/Lagos')
                'dateTimeInInterval', // DateTime('2003-03-15 02:00:49', 'Antartica/Vostok')
                'dateTimeThisCentury',     // DateTime('1915-05-30 19:28:21', 'UTC')
                'dateTimeThisDecade',      // DateTime('2007-05-29 22:30:48', 'Europe/Paris')
                'dateTimeThisYear',        // DateTime('2011-02-27 20:52:14', 'Africa/Lagos')
                'dateTimeThisMonth',       // DateTime('2011-10-23 13:46:23', 'Antarctica/Vostok')
                'amPm',                   // 'pm'
                'dayOfMonth',              // '04'
                'dayOfWeek',              // 'Friday'
                'month',                 // '06'
                'monthName',               // 'January'
                'year',                    // '1993'
                'century',                               // 'VI'
                'timezone',                              // 'Europe/Paris'            
                'unixTime',               // 58781813
                'dateTime', // DateTime('2008-04-25 08:37:17', 'UTC')
                'dateTimeAD', // DateTime('1800-04-29 20:38:49', 'Europe/Paris')
                'iso8601',                 // '1978-12-09T10:10:29+0000'
                'date', // '1979-06-09'
                'time', // '20:49:42'
                'dateTimeBetween', // DateTime('2003-03-15 02:00:49', 'Africa/Lagos')
                'dateTimeInInterval', // DateTime('2003-03-15 02:00:49', 'Antartica/Vostok')
                'dateTimeThisCentury',     // DateTime('1915-05-30 19:28:21', 'UTC')
                'dateTimeThisDecade',      // DateTime('2007-05-29 22:30:48', 'Europe/Paris')
                'dateTimeThisYear',        // DateTime('2011-02-27 20:52:14', 'Africa/Lagos')
                'dateTimeThisMonth',       // DateTime('2011-10-23 13:46:23', 'Antarctica/Vostok')
                'amPm',                    // 'pm'
                'dayOfMonth',              // '04'
                'dayOfWeek',               // 'Friday'
                'month',                   // '06'
                'monthName',               // 'January'
                'year',                    // '1993'
                'century',                               // 'VI'
                'timezone',                              // 'Europe/Paris'
            ],
            'internet' => [
                'email',                   // 'tkshlerin@collins.com'
                'safeEmail',               // 'king.alford@example.org'
                'freeEmail',               // 'bradley72@gmail.com'
                'companyEmail',            // 'russel.durward@mcdermott.org'
                'freeEmailDomain',         // 'yahoo.com'
                'safeEmailDomain',         // 'example.org'
                'userName',                // 'wade55'
                'password',                // 'k&|X+a45*2['
                'domainName',              // 'wolffdeckow.net'
                'domainWord',              // 'feeney'
                'tld',                     // 'biz'
                'url',                     // 'http://www.skilesdonnelly.biz/aut-accusantium-ut-architecto-sit-et.html'
                'slug',                    // 'aut-repellat-commodi-vel-itaque-nihil-id-saepe-nostrum'
                'ipv4',                    // '109.133.32.252'
                'localIpv4',               // '10.242.58.8'
                'ipv6',                    // '8e65:933d:22ee:a232:f1c1:2741:1f10:117c'
                'macAddress',              // '43:85:B7:08:10:CA'
            ],
            'agente de usuario' => [
                'userAgent',              // 'Mozilla/5.0 (Windows CE) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.888.0 Safari/5350'
                'chrome',                 // 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_5) AppleWebKit/5312 (KHTML, like Gecko) Chrome/14.0.894.0 Safari/5312'
                'firefox',                // 'Mozilla/5.0 (X11; Linuxi686; rv:7.0) Gecko/20101231 Firefox/3.6'
                'safari',                 // 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1 rv:3.0; en-US) AppleWebKit/534.11.3 (KHTML, like Gecko) Version/4.0 Safari/534.11.3'
                'opera',                  // 'Opera/8.25 (Windows NT 5.1; en-US) Presto/2.9.188 Version/10.00'
                'internetExplorer',       // 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Win 9x 4.90; Trident/3.0)'
            ],
            'cartao de credito' => [
                'creditCardType',          // 'MasterCard'
                'creditCardNumber',        // '4485480221084675'
                'creditCardExpirationDate', // 04/13
                'creditCardExpirationDateString', // '04/13'
                'creditCardDetails',       // array('MasterCard', '4485480221084675', 'Aleksander Nowak', '04/13')
            ],
            'cores' => [
                'hexcolor',               // '#fa3cc2'
                'rgbcolor',               // '0,255,122'
                'rgbColorAsArray',        // array(0,255,122)
                'rgbCssColor',            // 'rgb(0,255,122)'
                'safeColorName',          // 'fuchsia'
                'colorName',              // 'Gainsbor'
            ],
            'diversos' => [
                'boolean', // false
                'boolean', // true
                'md5',           // 'de99a620c50f2990e87144735cd357e7'
                'sha1',          // 'f08e7f04ca1a413807ebc47551a40a20a0b4de5c'
                'sha256',        // '0061e4c60dac5c1d82db0135a42e00c89ae3a333e7c26485321f24348c7e98a5'
                'locale',        // en_UK
                'countryCode',   // UK
                'languageCode',  // en
                'currencyCode',  // EUR
                'emoji',         
                'iban',     // 'IT31A8497112740YZ575DJ28BP4'
                'swiftBicNumber',          // 'RZTIAT22263'
            ]

        ]
    ];

