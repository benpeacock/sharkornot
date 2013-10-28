<?php
$file = 'PatrolShark.png';
header('Content-type: image/png');
header('Content-Disposition: attachment; filename="' . urlencode($file) . '"');
readfile("$file");
?>