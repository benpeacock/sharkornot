<?php
$file = 'HelloShark.gif';
header('Content-type: image/gif');
header('Content-Disposition: attachment; filename="' . urlencode($file) . '"');
readfile("$file");
?>