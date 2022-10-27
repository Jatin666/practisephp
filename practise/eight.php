<?php 
// Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n";
?>