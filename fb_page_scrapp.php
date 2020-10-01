<form action="" method="post">
    <input type="text" name="link" placeholder="Insert a link" />
    <input type="submit" name="submit" value="Go.." />
</form>
<br />
<br />
<!----- PHP code start from here------>
<?php
if (isset($_REQUEST['submit'])) {
    $link = $_REQUEST['link'];
    $test = explode("www", $link);
    $data = $test['0'] . "mobile" . $test['1'];

    /* Now start cURL code */
    $ch = curl_init($data);
    curl_setopt($ch, CURLOPT_URL, "$data");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36");
    curl_setopt($ch, CURLOPT_REFERER, "https://www.facebook.com/");
    $result = curl_exec($ch);
    curl_close($ch);

    /* extract all information from the facebook page */
    $dom = new DOMDocument();
}
?>