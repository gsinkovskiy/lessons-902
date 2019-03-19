<?php

$a['f'] = 'first';
$a[] = 'second';
$a['th'] = 'third';
$a[] = 'fourth';

$s = 'Привет мир!';

$pos = mb_strpos($s, 'мир');

var_dump($pos);
exit();

foreach ($a as $key => $item) {
	echo $key . ' - ' . $item . "\n";
}

foreach ($a as $key) {
	echo $key . "\n";
}
