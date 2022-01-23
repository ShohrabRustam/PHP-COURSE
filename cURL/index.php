<?php
$url = "https://mail.google.com/mail/u/0/#inbox";
//for starting url
//sample example to get data 
$resource = curl_init($url);
// echo $resource;
curl_setopt($resource,CURLOPT_RETURNTRANSFER,true); 
// execution on resource
$result = curl_exec($resource);
echo $result,'<br>';

echo"<h1>Information</h1>";
// getting the entire information 
// $info = curl_getinfo($resource);
// echo $info.'<br>';
// getting the number of lines or variable 
$info = curl_getinfo($resource,CURLINFO_HTTP_CODE);
echo $info.'<br>';

echo'<pre>';
var_dump($info) .'<br>';
echo '</pre>';
curl_close($resource);
// echo $result;
?>
