<?php include("../../phpscripts/Database.php");

if (isset($_GET["id"]))
{
	// Get message Id
	$msgId = $_GET["id"];

	// Create Query and Param/s
	$query = "DELETE FROM `messages` WHERE `msg_id` = ?";
	$params = [$msgId];

	$delMsg = new Database();
	$delMsg = $delMsg->deleteRow($query, $params);

	if($delMsg)
	{
		header("Location: messages.php");
	}
	else
	{
		echo "Error Deleting Message";
	}
}

else
{
	header("Location: ../../404.php");
}


