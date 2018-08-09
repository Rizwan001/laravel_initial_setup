<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '2019007611697769',
            'client_secret' => '3de0cb1dc7de6c8da86b5cc7b29b2ff3',
            'redirect_uri' => 'https://forums.ddkoin.com/facebook/redirect',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '967738892411-il67gbn6amrv5qlvm9ggancfacu7j20m.apps.googleusercontent.com',
            'client_secret' => 'hXZbU8lF5Ke81Assn82C05N2',
            'redirect_uri' => 'https://forums.ddkoin.com/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => '5b7158026e8ba283ae03',
            'client_secret' => 'b50fd14420210cc63c18568f38ddb7d3dc49bed8',
            'redirect_uri' => 'http://13.250.38.176/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
