<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<script type='textjavascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<?php
	require_once('config.php');
	require_once('lib/lti.php');
	display_errors();
	$lti = new Lti($config);
?>
</head>
<body>
<h1>LTI Status</h1>
<h3>This page is a test LTI page to verify the compatibility and status of the LTI connection</h3>
<dl>
	<dt>Status</dt><dd><?php 
		if($lti->is_valid()) {
			echo 'Valid';
		} else {
			echo 'Invalid';
		}
	?></dd>
	<dt>User ID</dt><dd><?php echo $lti->user_id();?></dd>
	<dt>Call Data</dt><dd><pre><?php print_r($lti->calldata());?></pre></dd>
	<dt>Errors</dt><dd><pre><?php print_r($lti->get_errors()); ?></pre></dd>
</dl>
</body>
</html>