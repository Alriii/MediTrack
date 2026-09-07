<?php

// Work out the public folder so links still work if the project is moved.
$scriptPath = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/MediTrack/index.php');
$scriptDirectory = rtrim(str_replace('\\', '/', dirname($scriptPath)), '/');

if (basename($scriptDirectory) === 'pages') {
	$scriptDirectory = rtrim(str_replace('\\', '/', dirname($scriptDirectory)), '/');
}

define('MEDTRACK_BASE_URL', $scriptDirectory === '/' ? '' : $scriptDirectory);
