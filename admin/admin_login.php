<?php session_start(); ?>

<?php

$pageTitle = "Admin Login";
include("../includes/head.php");
include("../phpscripts/Database.php");

$admin = new Database();

if (isset($_POST["admin_login"]))
{
	$admin_email 	= $_POST["admin_email"];
	$admin_password = $_POST["admin_password"];

	$query = "SELECT * FROM `admins` WHERE `admin_email` = ? AND `admin_password` = ?";
	$params = [$admin_email, $admin_password];

	$admin = $admin->getRow($query, $params);
	
	if ($admin)
	{
		$_SESSION["admin_first_name"] = $admin["admin_first_name"];
		Header("Location: dashboard.php");
	}
	else
	{
		echo "We got a problem, Sir!";
	}
}