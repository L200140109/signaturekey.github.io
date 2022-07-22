<?php

function getHeader() {
    date_default_timezone_set('UTC');
    $userid = 'dpmptsp';
    $password = 'Lvf7omlOSiNwwKfQ9aOHYB1ySuKtpnW5nATekLbDvhhzZ4GBa2dJgjzFHq6EiFCc';
        
    $inttime        = strval(time()-strtotime('1970-01-01 00:00:00')); 
    $value          = "$userid&$inttime"; 
    $key            = $password; 
    $signature      = hash_hmac('sha256', $value, $key, true); 
    $signature64    = base64_encode($signature);
    $header  = array(
        'userid:'.$userid,
        'signature:'.$signature64,
        'key:'.$inttime
    );
    return $header;
}

$header = getHeader();
echo "<pre>";
print_r($header);
echo "</pre>";

?>