<?php
$ch = curl_init(); // start session
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/"); // target url
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // avoid any ssl issue
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //avoid any ssl issue
curl_exec($ch); // executing code
curl_close($ch); // session close
