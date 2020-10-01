<?php
$data = array(
    'user' => 'DeveloperRezwan',
    'password' => 'Rez1rez1@',
);
$ch = curl_init('http://localhost/portfolio/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36");
curl_setopt($ch, CURLOPT_REFERER, "https://mobile.facebook.com");
$result = curl_exec($ch);
curl_close($ch);

$dom = new DOMDocument();
@$dom->loadHTML($result);
$content = $dom->getElementsByTagName('h5');
foreach ($content as $value) {
    echo $value->nodeValue . "<br/>";
}