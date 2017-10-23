<?php
$data = "<PWBRequest><transactionName>CHECK_STATUS_QUERY_REQ</transactionName><header><application>SendCode</application><requestTime>2016-02-20</requestTime></header><identityInfo><corpCode>TESTFX</corpCode><userName>admin</userName></identityInfo><orderRequest><order><orderCode>21</orderCode></order></orderRequest></PWBRequest>TESTFX";
$code = md5($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://localhost/handle_form.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// grab URL, and print
curl_exec($ch);


//39b3f7d2e9b4035cc5086492c2b2c8d3
//759fe581a7fd40dbe0c61f8ddec4aab8
echo $code;
