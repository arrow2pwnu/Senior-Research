<?php
	$input = $_POST["text"];
	$cmd = 'python py/test.py' . ' ' . $input;
	$script = escapeshellcmd($cmd);
	$output = shell_exec($script);
	echo $output;
?>