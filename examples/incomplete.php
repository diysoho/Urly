<?php

/*
 * Incomplete - When a url is given with www. or http://, it is automatically added
 */

require '../urly.php';

$url = 'adobe.github.io';

$urly = new urly($url);
$result = $urly->run();

echo $result;


?>