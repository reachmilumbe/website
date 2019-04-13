<?php session_start();?>
<?php $pageTitle = "Admin Dashboard"; ?>
<?php include("../includes/head.php"); ?>

<?php 
	if (!isset($_SESSION["admin_first_name"]))
	{
		Header("Location: index.php");
	}

	echo "Welcome to the Dashboard: {$_SESSION['admin_first_name']}";
?>
	<a href="admin_logout.php">Log Out</a>

