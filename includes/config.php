<?php

$config = [
    'domain'    => 'cibed.ca', //'cibed.local'
    'name'      => 'CIBED',
    'phone'     => '+1 (306) 807 5813',
    'email'     => 'info@cibed.ca',
    'address'   => '11th Avenue, 7th Floor, Regina, SK S4P 0J3',
    'facebook'  => 'https://www.facebook.com/cibedtech',
    'twitter'   => 'https://www.twitter.com/cibedtech',
    'instagram' => 'https://www.instagram.com/cibedtech',
    'time'      => '8:00am - 5:00pm',
];

$site = (object) $config;
$site->url = 'https://'. $site->domain;

return $site;

