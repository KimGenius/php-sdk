<?php
/**
 * #example_list
 *
 * This sample code demonstrate how to check sender number list through CoolSMS Rest API PHP
 * for more info, visit
 * www.coolsms.co.kr
 */

use Nurigo\Api\SenderID;
use Nurigo\Exceptions\CoolsmsException;

require_once __DIR__ . "/../../bootstrap.php";

// api_key and api_secret can be obtained from www.coolsms.co.kr/credentials
$api_key = '#ENTER_YOUR_OWN#';
$api_secret = '#ENTER_YOUR_OWN#';

try {
    // initiate rest api sdk object
    $rest = new SenderID($api_key, $api_secret);

    // Optional parameters for your own needs
    // $site_user = 'admin'; // site user_id. '__private__' is default value

    $result = $rest->getSenderidList(); // or $rest->senderidList($site_user);
    print_r($result);
} catch(CoolsmsException $e) {
    echo $e->getMessage(); // get error message
    echo $e->getCode(); // get error code
}
