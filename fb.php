<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://mobile.facebook.com/groups/fnsclub2020");
curl_setopt($ch, CURLOPT_RETURNTRANSFER , TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36");
 curl_setopt($ch, CURLOPT_REFERER, "https://www.facebook.com/");
$html = curl_exec($ch);
curl_close($ch);


