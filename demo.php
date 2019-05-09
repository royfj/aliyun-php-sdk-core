<?php

require_once 'vendor/autoload.php';

//\Aliyun\Core\Config::load();

$iClientProfile = DefaultProfile::getProfile(
    '<your-region>',
    '<your-app-key>',
    '<your-app-secret>'
);

$client = new DefaultAcsClient($iClientProfile);

var_dump($client);