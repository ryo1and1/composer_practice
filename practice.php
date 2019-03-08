<?php
require_once __DIR__.'/vendor/autoload.php';

 

$today = \Carbon\Carbon::now(new DateTimeZone("Asia/Tokyo"))->format("Y-m-d H:i:s");

var_dump($today);

?>
