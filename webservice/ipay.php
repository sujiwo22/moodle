<?php
    // SAMPLE HIT API iPaymu v2 PHP //

    $va           = '0000005261657539'; //get on iPaymu dashboard
    $secret       = 'SANDBOX5100CB29-EE73-4D8F-89E3-4FAAC367F876'; //get on iPaymu dashboard

    $url          = 'https://sandbox.ipaymu.com/api/v2/payment'; // for development mode
    // $url          = 'https://my.ipaymu.com/api/v2/payment'; // for production mode
    
    $method       = 'POST'; //method
    
    //Request Body//
    $body['product']    = array('headset', 'softcase');
    $body['qty']        = array('1', '3');
    $body['price']      = array('100000', '20000');
    $body['returnUrl']  = 'http://localhost/moodle/thank-you-page';
    $body['cancelUrl']  = 'http://localhost/moodle/cancel-page';
    $body['notifyUrl']  = 'http://localhost/moodle/callback-url';
    $body['referenceId'] = '1234'; //your reference id
    //End Request Body//

    //Generate Signature
    // *Don't change this
    $jsonBody     = json_encode($body, JSON_UNESCAPED_SLASHES);
    $requestBody  = strtolower(hash('sha256', $jsonBody));
    $stringToSign = strtoupper($method) . ':' . $va . ':' . $requestBody . ':' . $secret;
    $signature    = hash_hmac('sha256', $stringToSign, $secret);
    $timestamp    = Date('YmdHis');
    //End Generate Signature


    $ch = curl_init($url);

    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'va: ' . $va,
        'signature: ' . $signature,
        'timestamp: ' . $timestamp
    );

    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_POST, count($body));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonBody);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $err = curl_error($ch);
    $ret = curl_exec($ch);
    curl_close($ch);

    if($err) {
        echo $err;
    } else {

        //Response
        $ret = json_decode($ret);
        if($ret->Status == 200) {
            $sessionId  = $ret->Data->SessionID;
            $url        =  $ret->Data->Url;
            header('Location:' . $url);
        } else {
            echo $ret;
        }
        //End Response
    }

?>