<?php

/**
* TokenLite configuration
*
* Our custom configuration file
* TokenLite config file
* useage config('icoapp.*****', if_null);
*/

return [

    /*
    |--------------------------------------------------------------------------
    | Application Custom Configuration
    |--------------------------------------------------------------------------
    |
    */

    'tnx_prefix' => env('TRNX_PREFIX', 'TNX'),

    'user_prefix' => env('USER_PREFIX', 'UD'),

    'refund_prefix' => env('REFUND_PREFIX', 'RTX'),

    'withdraw_prefix' => env('WITHDRAW_PREFIX', 'WTX'),

    'force_https' => env('FORCE_HTTPS', 'false'),

    'supported_languages' => ['en', 'fr', 'es'],
    
    'show_languages_switcher' => false,
    
    'themes' =>[
        "style" => "Default",
        "style-blue" => "Azure Blue",
        "style-green" => "Teal Green",
        "style-charcoal" => "Charcoal",
        "style-coral" => "Coral Red",
        "style-gold" => "Fire Gold",
        "style-tangerine" => "Tangerine Orange",
        "style-watermelon" => "Watermelon Green"
    ],

    'countries' => [
        "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"
    ],

    'timezones' => [
        "Pacific/Midway" => "(UTC-11:00) Midway Island",  "Pacific/Samoa" => "(UTC-11:00) Samoa",  "Pacific/Honolulu" => "(UTC-10:00) Hawaii",  "US/Alaska" => "(UTC-09:00) Alaska",  "America/Los_Angeles" => "(UTC-08:00) Pacific Time (US &amp; Canada)",  "America/Tijuana" => "(UTC-08:00) Tijuana",  "US/Arizona" => "(UTC-07:00) Arizona",  "America/Chihuahua" => "(UTC-07:00) Chihuahua",  "America/Chihuahua" => "(UTC-07:00) La Paz",  "America/Mazatlan" => "(UTC-07:00) Mazatlan",  "US/Mountain" => "(UTC-07:00) Mountain Time (US &amp; Canada)",  "America/Managua" => "(UTC-06:00) Central America",  "US/Central" => "(UTC-06:00) Central Time (US &amp; Canada)",  "America/Mexico_City" => "(UTC-06:00) Guadalajara",  "America/Mexico_City" => "(UTC-06:00) Mexico City",  "America/Monterrey" => "(UTC-06:00) Monterrey",  "Canada/Saskatchewan" => "(UTC-06:00) Saskatchewan",  "America/Bogota" => "(UTC-05:00) Bogota",  "US/Eastern" => "(UTC-05:00) Eastern Time (US &amp; Canada)",  "US/East-Indiana" => "(UTC-05:00) Indiana (East)",  "America/Lima" => "(UTC-05:00) Lima",  "America/Bogota" => "(UTC-05:00) Quito",  "Canada/Atlantic" => "(UTC-04:00) Atlantic Time (Canada)",  "America/Caracas" => "(UTC-04:30) Caracas",  "America/La_Paz" => "(UTC-04:00) La Paz",  "America/Santiago" => "(UTC-04:00) Santiago",  "Canada/Newfoundland" => "(UTC-03:30) Newfoundland",  "America/Sao_Paulo" => "(UTC-03:00) Brasilia",  "America/Argentina/Buenos_Aires" => "(UTC-03:00) Buenos Aires",  "America/Argentina/Buenos_Aires" => "(UTC-03:00) Georgetown",  "America/Godthab" => "(UTC-03:00) Greenland",  "America/Noronha" => "(UTC-02:00) Mid-Atlantic",  "Atlantic/Azores" => "(UTC-01:00) Azores",  "Atlantic/Cape_Verde" => "(UTC-01:00) Cape Verde Is.",  "Africa/Casablanca" => "(UTC+00:00) Casablanca",  "Europe/London" => "(UTC+00:00) Edinburgh",  "Etc/Greenwich" => "(UTC+00:00) Greenwich Mean Time : Dublin",  "Europe/Lisbon" => "(UTC+00:00) Lisbon",  "Europe/London" => "(UTC+00:00) London",  "Africa/Monrovia" => "(UTC+00:00) Monrovia",  "UTC" => "(UTC+00:00) UTC",  "Europe/Amsterdam" => "(UTC+01:00) Amsterdam",  "Europe/Belgrade" => "(UTC+01:00) Belgrade",  "Europe/Berlin" => "(UTC+01:00) Berlin",  "Europe/Berlin" => "(UTC+01:00) Bern",  "Europe/Bratislava" => "(UTC+01:00) Bratislava",  "Europe/Brussels" => "(UTC+01:00) Brussels",  "Europe/Budapest" => "(UTC+01:00) Budapest",  "Europe/Copenhagen" => "(UTC+01:00) Copenhagen",  "Europe/Ljubljana" => "(UTC+01:00) Ljubljana",  "Europe/Madrid" => "(UTC+01:00) Madrid",  "Europe/Paris" => "(UTC+01:00) Paris",  "Europe/Prague" => "(UTC+01:00) Prague",  "Europe/Rome" => "(UTC+01:00) Rome",  "Europe/Sarajevo" => "(UTC+01:00) Sarajevo",  "Europe/Skopje" => "(UTC+01:00) Skopje",  "Europe/Stockholm" => "(UTC+01:00) Stockholm",  "Europe/Vienna" => "(UTC+01:00) Vienna",  "Europe/Warsaw" => "(UTC+01:00) Warsaw",  "Africa/Lagos" => "(UTC+01:00) West Central Africa",  "Europe/Zagreb" => "(UTC+01:00) Zagreb",  "Europe/Athens" => "(UTC+02:00) Athens",  "Europe/Bucharest" => "(UTC+02:00) Bucharest",  "Africa/Cairo" => "(UTC+02:00) Cairo",  "Africa/Harare" => "(UTC+02:00) Harare",  "Europe/Helsinki" => "(UTC+02:00) Helsinki",  "Europe/Istanbul" => "(UTC+02:00) Istanbul",  "Asia/Jerusalem" => "(UTC+02:00) Jerusalem",  "Europe/Helsinki" => "(UTC+02:00) Kyiv",  "Africa/Johannesburg" => "(UTC+02:00) Pretoria",  "Europe/Riga" => "(UTC+02:00) Riga",  "Europe/Sofia" => "(UTC+02:00) Sofia",  "Europe/Tallinn" => "(UTC+02:00) Tallinn",  "Europe/Vilnius" => "(UTC+02:00) Vilnius",  "Asia/Baghdad" => "(UTC+03:00) Baghdad",  "Asia/Kuwait" => "(UTC+03:00) Kuwait",  "Europe/Minsk" => "(UTC+03:00) Minsk",  "Africa/Nairobi" => "(UTC+03:00) Nairobi",  "Asia/Riyadh" => "(UTC+03:00) Riyadh",  "Europe/Volgograd" => "(UTC+03:00) Volgograd",  "Asia/Tehran" => "(UTC+03:30) Tehran",  "Asia/Muscat" => "(UTC+04:00) Abu Dhabi",  "Asia/Baku" => "(UTC+04:00) Baku",  "Europe/Moscow" => "(UTC+04:00) Moscow",  "Asia/Muscat" => "(UTC+04:00) Muscat",  "Europe/Moscow" => "(UTC+04:00) St. Petersburg",  "Asia/Tbilisi" => "(UTC+04:00) Tbilisi",  "Asia/Yerevan" => "(UTC+04:00) Yerevan",  "Asia/Kabul" => "(UTC+04:30) Kabul",  "Asia/Karachi" => "(UTC+05:00) Islamabad",  "Asia/Karachi" => "(UTC+05:00) Karachi",  "Asia/Tashkent" => "(UTC+05:00) Tashkent",  "Asia/Calcutta" => "(UTC+05:30) Chennai",  "Asia/Kolkata" => "(UTC+05:30) Kolkata",  "Asia/Calcutta" => "(UTC+05:30) Mumbai",  "Asia/Calcutta" => "(UTC+05:30) New Delhi",  "Asia/Calcutta" => "(UTC+05:30) Sri Jayawardenepura",  "Asia/Katmandu" => "(UTC+05:45) Kathmandu",  "Asia/Almaty" => "(UTC+06:00) Almaty",  "Asia/Dhaka" => "(UTC+06:00) Astana",  "Asia/Dhaka" => "(UTC+06:00) Dhaka",  "Asia/Yekaterinburg" => "(UTC+06:00) Ekaterinburg",  "Asia/Rangoon" => "(UTC+06:30) Rangoon",  "Asia/Bangkok" => "(UTC+07:00) Bangkok",  "Asia/Bangkok" => "(UTC+07:00) Hanoi",  "Asia/Jakarta" => "(UTC+07:00) Jakarta",  "Asia/Novosibirsk" => "(UTC+07:00) Novosibirsk",  "Asia/Hong_Kong" => "(UTC+08:00) Beijing",  "Asia/Chongqing" => "(UTC+08:00) Chongqing",  "Asia/Hong_Kong" => "(UTC+08:00) Hong Kong",  "Asia/Krasnoyarsk" => "(UTC+08:00) Krasnoyarsk",  "Asia/Kuala_Lumpur" => "(UTC+08:00) Kuala Lumpur",  "Australia/Perth" => "(UTC+08:00) Perth",  "Asia/Singapore" => "(UTC+08:00) Singapore",  "Asia/Taipei" => "(UTC+08:00) Taipei",  "Asia/Ulan_Bator" => "(UTC+08:00) Ulaan Bataar",  "Asia/Urumqi" => "(UTC+08:00) Urumqi",  "Asia/Irkutsk" => "(UTC+09:00) Irkutsk",  "Asia/Tokyo" => "(UTC+09:00) Osaka",  "Asia/Tokyo" => "(UTC+09:00) Sapporo",  "Asia/Seoul" => "(UTC+09:00) Seoul",  "Asia/Tokyo" => "(UTC+09:00) Tokyo",  "Australia/Adelaide" => "(UTC+09:30) Adelaide",  "Australia/Darwin" => "(UTC+09:30) Darwin",  "Australia/Brisbane" => "(UTC+10:00) Brisbane",  "Australia/Canberra" => "(UTC+10:00) Canberra",  "Pacific/Guam" => "(UTC+10:00) Guam",  "Australia/Hobart" => "(UTC+10:00) Hobart",  "Australia/Melbourne" => "(UTC+10:00) Melbourne",  "Pacific/Port_Moresby" => "(UTC+10:00) Port Moresby",  "Australia/Sydney" => "(UTC+10:00) Sydney",  "Asia/Yakutsk" => "(UTC+10:00) Yakutsk",  "Asia/Vladivostok" => "(UTC+11:00) Vladivostok",  "Pacific/Auckland" => "(UTC+12:00) Auckland",  "Pacific/Fiji" => "(UTC+12:00) Fiji",  "Pacific/Kwajalein" => "(UTC+12:00) International Date Line West",  "Asia/Kamchatka" => "(UTC+12:00) Kamchatka",  "Asia/Magadan" => "(UTC+12:00) Magadan",  "Pacific/Fiji" => "(UTC+12:00) Marshall Is.",  "Asia/Magadan" => "(UTC+12:00) New Caledonia",  "Asia/Magadan" => "(UTC+12:00) Solomon Is.",  "Pacific/Auckland" => "(UTC+12:00) Wellington",  "Pacific/Tongatapu" => "(UTC+13:00) Nuku'alofa"
    ],
];