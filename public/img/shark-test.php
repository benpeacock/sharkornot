<?php
require_once('functions.inc.php');

$message = '';

if (isset($_GET['test']) && $_GET['test'] == 1) {
	$message = '';
	$result = sharkTest();
}

echo $message;
?>