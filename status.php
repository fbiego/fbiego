<?php

function send_status($status)
{
    $cURLConnection = curl_init();
    curl_setopt(
        $cURLConnection,
        CURLOPT_URL,
        "https://iot.fbiego.com/api/workflow/?status=" . $status
    );
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($cURLConnection);
    curl_close($cURLConnection);
	
}

$st = $argv[1];

send_status(&st);

?>
