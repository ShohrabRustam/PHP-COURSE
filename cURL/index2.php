<?php
$url = "https://mail.google.com/mail/u/0/#inbox";
//For starting the url
$resource = curl_init($url);
// echo $resource;
curl_setopt($resource,CURLOPT_RETURNTRANSFER,true); 
$result = curl_exec($resource);
// echo $result;
$info = curl_getinfo($resource,CURLINFO_HTTP_CODE);
echo $result.'<br>'; 

echo'<pre>';
var_dump($info) .'<br>';
echo '</pre>';
// curl_close($resource);
// echo $result;
?>
