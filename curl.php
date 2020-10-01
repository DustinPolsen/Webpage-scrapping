<?php 
$ch = curl_init('https://mobile.facebook.com/PHP.Morioh');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIE, 1);

$result = curl_exec($ch);

curl_close($ch);
echo $result;
exit();
$dom = new DOMDocument;
libxml_use_internal_errors($result);
$dom->loadHTML('$result');
$tag = $dom->getElementsByTagName('p');
for($i=0;$i <$tag->length ; $i++){
  $grab = $tag->item($i);
    echo $grab->attributes;
}

?>