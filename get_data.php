<form action="" method="post">
    <input type="search" name="search" placeholder="search your target key">
    <input type="submit" name="submit" value="Search">
</form>

<?php
if (isset($_REQUEST['submit'])) {

    $search = htmlspecialchars($_REQUEST['search']);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/search?q=$search");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_exec($ch);
    curl_close($ch);
}


?>