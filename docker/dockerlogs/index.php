<?php
// Get container name from query parameter
$containerName = $_GET['container'] ?? 'unknown';

// Run docker logs command and capture output
header('Content-Type: text/plain');
$output = shell_exec("docker logs --tail 50 " . escapeshellarg($containerName) . " 2>&1");

echo $output ?: "Failed to retrieve logs.";
?>
