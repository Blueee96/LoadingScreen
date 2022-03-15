<?php
include __DIR__ . "/../../config.php";
require __DIR__ . '/SourceQuery/bootstrap.php'; // Add Source Query Class

$functionReturn = "76561233027414425";
$Query = new xPaw\SourceQuery\SourceQuery();

try
{
	$Query->Connect($serverip, $serverport, 1, xPaw\SourceQuery\SourceQuery::SOURCE);
	
	$Info = $Query->GetInfo(); // General information such as map, max players, hostname, etc.
	$Players = $Query->GetPlayers(); // General player information such as count and a player list

	if ($Info["HostName"] == "")
	{
		$status = "<span style=\"color: red;\">Offline</span>";
		$hostname = "Unknown";
		$maxplayers = "?";
		$connectedplayers = "?";
		$map = "Unknown";
	}
	else
	{
		$hostname = $Info['HostName'];
		$maxplayers = $Info['MaxPlayers'];
		$connectedplayers = count($Players);
		$map = $Info['Map'];
		$status = "<span style=\"color: green;\">Online</span>";
	}
}
catch (Exception $e)
{
	$hostname = "Unknown";
	$maxplayers = "0";
	$connectedplayers = "0";
	$map = "Unknown";
	$status = "<span style=\"color: orange;\">Unavailable</span>";
}



$Query->Disconnect();
?>

<div style="visibility: hidden;">76561233027414425</div>