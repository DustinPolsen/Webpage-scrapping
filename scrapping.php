<?php

$ch = curl_init();

$h2s = $dom->getElementsByTagName('li');
$h2 = $h2s->item(0);
 
foreach ($h2 as $value) {
	echo $value->nodeValue;
}
