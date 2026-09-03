<?php

return [
    // National digits only: callers enter the mobile number without its
    // international dialing code or domestic trunk prefix.
    'phone_countries' => [
        'AE' => [
            'dial_code' => '+971',
            'length' => 9,
            'label' => 'United Arab Emirates',
            'pattern' => '/^5\\d{8}$/',
            'hint' => 'Enter the 9 digits after +971 (starting with 5).',
        ],
        'IN' => [
            'dial_code' => '+91',
            'length' => 10,
            'label' => 'India',
            'pattern' => '/^[6-9]\\d{9}$/',
            'hint' => 'Enter the 10-digit mobile number after +91.',
        ],
        'US' => [
            'dial_code' => '+1',
            'length' => 10,
            'label' => 'United States',
            'pattern' => '/^[2-9]\\d{2}[2-9]\\d{6}$/',
            'hint' => 'Enter the 10-digit mobile number after +1.',
        ],
    ],
];
