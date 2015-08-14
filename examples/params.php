<?php

/*
 * Params - You can return just the parameters of the URL rather than the full URL
 */

require '../urly.php';

$url = 'http://www.amazon.com/gp/product/B002FJZLJY?ref_=gbsl_tit_l-1_4822_895d0299&smid=ATVPDKIKX0DER';

$urly = new urly($url);
$result = $urly->run();

echo $urly->params;


?>