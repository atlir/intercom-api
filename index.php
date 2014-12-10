<?php
require_once 'vendor/autoload.php';
require_once 'src/base.php';

$api = new Api(array(
	'app_id' => 'gn0zv6mj',
	'api_key' => '0da62f3522487aa824f116ffce806b018d667c95'
));


/*
$newUser = $api->createUser(rand(), array(
	"email" => "testuser3@intercom.io",
	"last_request_at" => time(),
	"custom_data" => array(
		"projects_delivered" => 12,
	)
));
*/


/*
$userId='1275588350';
$eventName='test event';
$api->pushEvent($userId, $eventName, array(
	"email" => "testuser@intercom.io",
	"created_at" => time(),
	"metadata" => array(
		"projects_delivered" => 12,
	)
));
*/


/*
$userId='54883a021e99671cc40000bd';
$property='email';
$value='newtestmail@mail.com';
$api->updateProperty($userId, $property, $value);
*/

?>