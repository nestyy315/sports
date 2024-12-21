<?php
// Define base URL dynamically based on server variables
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', realpath(__DIR__ . '/../')) . '/') . 'main/';
define('BASE_URL', $baseUrl);

// Define base directory for images
define('IMAGE_DIR', __DIR__ . '/../../../pictures/events/');
?>
