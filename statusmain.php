<!DOCTYPE html>

<html>
<body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="font.css">
</head>
	<style>
	body { font-family: Roboto, Arial, sans-serif; }
	</style>
</head>
	<div class="w3-container w3-red">
  <h1>CoreCraft Network Status</h1>
</div>



<div id="body">
	<table style="width:100%">
	<tr>
		<td>
	<h3>Network Status</h3>
<?php

	include_once 'networkstatus.php';
	$status = new CCStatus();
	$response = $status->getStatus('play.corecraft.me');
	if(!$response) {
		echo"CoreCraft Network is Currently Offline :(";
	} else {
		echo"
		The Server ".$response['hostname']." is online, <br>
		Currently their ".$response['players']." players online of a maximum of ".$response['maxplayers'].". <br>
		The server's ping is ".$response['ping']." ms";
	}

	?>
</tr>
<td>

<tr>
	<td>
<h3>PvP CoreCraft Status</h3>

	<?php

	include_once 'pvpstatus.php';
	$status = new CCStatus2();
	$response = $status->getStatus('pvp.corecraft.me');
	if(!$response) {
		echo"CoreCraft PvP is Currently Offline :(";
	} else {
		echo"
		The Server ".$response['hostname']." is online, <br>
		Currently their ".$response['players']." players online of a maximum of ".$response['maxplayers'].". <br>
		The server's ping is ".$response['ping']." ms";
	}
	?>
</tr>
<td>

<tr>
	<td>
	<h3>OP CoreCraft Status</h3>

	<?php
	include_once 'opstatus.php';
	$status = new CCStatus3();
	$response = $status->getStatus('op.corecraft.me');
	if(!$response) {
		echo"CoreCraft OP is Currently Offline :(";
	} else {
		echo"
		The Server ".$response['hostname']." is online, <br>
		Currently their ".$response['players']." players online of a maximum of ".$response['maxplayers'].". <br>
		The server's ping is ".$response['ping']." ms";
	}

?>
</tr>
<td>
</div>
<br>

<div class="w3-container w3-red">
  <h5>&copy;2016 CoreCraft, All Rights Reserved</h5>
  <p>CoreCraft Status Checker Developed By Xotic</p>
</div>
</body>
</html>
