<?php

/*
 * Relative - When a relative URL is given, it is appended to the domain when set.
 */

require '../urly.php';

$url = 'https://adobe.github.io';
$path = '/Spry/samples/data_region/JSONDataSetSample.html';

$urly = new urly($path, false, $url);
$result = $urly->run();

echo $result;


?>