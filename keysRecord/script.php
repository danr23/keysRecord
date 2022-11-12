<?php
$filename = 'file';
$te = $_GET['width'];
$space = ' <br> '.PHP_EOL;
$text = $te.PHP_EOL;
file_put_contents($filename, $text, FILE_APPEND);
file_put_contents($filename, $space, FILE_APPEND);

?>
