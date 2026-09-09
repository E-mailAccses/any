<?php
$file = 'statement.js';
header('Content-Type: application/javascript');
header('Content-Disposition: attachment; filename="' . $file . '"');
header('Content-Length: ' . filesize($file));
readfile($file);
exit;
?>