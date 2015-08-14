<?php

/*
 * Cleanup - You can remove all params and return just the domain
 */

require '../urly.php';

$url = 'https://adobe.github.io/Spry/samples/data_region/JSONDataSetSample.html';

$urly = new urly($url, true);
$result = $urly->run();

echo $result;


?>