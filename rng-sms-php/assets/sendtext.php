<?php
require('vendor/autoload.php');

$RECIPIENT = '<ENTER PHONE NUMBER>';

$RINGCENTRAL_CLIENTID = '<ENTER CLIENT ID>';
$RINGCENTRAL_CLIENTSECRET = '<ENTER CLIENT SECRET>';
$RINGCENTRAL_SERVER = 'https://platform.devtest.ringcentral.com';

$RINGCENTRAL_USERNAME = '<YOUR ACCOUNT PHONE NUMBER>';
$RINGCENTRAL_PASSWORD = '<YOUR ACCOUNT PASSWORD>';
$RINGCENTRAL_EXTENSION = '<YOUR EXTENSION, PROBABLY "101">';

$rcsdk = new RingCentral\SDK\SDK($RINGCENTRAL_CLIENTID, $RINGCENTRAL_CLIENTSECRET, $RINGCENTRAL_SERVER);

$platform = $rcsdk->platform();
$platform->login($RINGCENTRAL_USERNAME, $RINGCENTRAL_EXTENSION, $RINGCENTRAL_PASSWORD);

$resp = $platform->post('/account/~/extension/~/sms',
    array(
        'from' => array ('phoneNumber' => $RINGCENTRAL_USERNAME),
        'to' => array(array('phoneNumber' => $RECIPIENT)),
        'text' => 'Hello World from PHP'
    ));
print_r ("SMS sent. Message status: " . $resp->json()->messageStatus);
?>