<?php
require_once '../vendor/autoload.php';

$uri = "http://localhost/moodle/webservice/rest/server.php"; 
$token = "6afa5191157a88f3b812cc4fd93b803c";
// $username = "daffa"; 
// $firstname = "Daffa"; 
// $lastname = "Ibnu"; 
// $mail = "daffa_ibnu@mail.com"; 
// $SOME_CUSTOM_FIELD_VALUE = "1234"; 

$username = $_REQUEST['username']; 
$firstname = $_REQUEST['firstname']; 
$lastname = $_REQUEST['lastname']; 
$mail = $_REQUEST['mail']; 
$password = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);

$auth = "manual"; 
// $SOME_CUSTOM_FIELD_LABEL = "MY-CUSTOM-FIELD";
$MoodleRest = new MoodleRest(); // Let's setup the call
// Setting URI and Token in our MoodleRest API
$MoodleRest->setServerAddress($uri);
$MoodleRest->setToken($token);
// Handling parameters based on the Moodle documentation
$new_user = array('users' => array(array('username' => $username, 'auth' => $auth, 'firstname' => $firstname, 'lastname' => $lastname,'email'=> $mail,'password'=>$password)));
//debug on-off
$MoodleRest->setDebug();
// Doing the REST call
$return = $MoodleRest->request('core_user_create_users', $new_user, MoodleRest::METHOD_POST);
// Now some basic response/error handling. If return is 0 everything is ok! 
// Else print "Something was wrong". It's possibile to user $return to populate an e-mail to know if something went wrong.
echo json_encode($return);
// if ($return[0]['id']): print('ok');
//         else: print('something was wrong');
// endif;
