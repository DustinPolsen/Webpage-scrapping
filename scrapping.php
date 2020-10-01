<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://trickbd.com/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$html = curl_exec($ch);

$dom = new DOMDocument();
@$dom->loadHTML($html);

$h2s = $dom->getElementsByTagName('li');
$h2 = $h2s->item(0);
 
foreach ($h2 as $value) {
	echo $value->nodeValue;
}