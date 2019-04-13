<?php
	$pageTitle = "Admin Login";
	include("../includes/head.php");
	include("../phpscripts/Database.php");

	class Admin extends Database
	{
		public $admin_email, $admin_password, $query, $params;

		public function __construct()
		{
			$this->admin_email		 = $_POST["admin_email"];
			$this->admin_password	 = $_POST["admin_password"];

			// Query the database for use with provided credentials
			$this->query = "SELECT * FROM `admins` WHERE `admin_email` = ? AND `admin_password` = ?";
			$this->params = [$this->admin_email, $this->admin_password];
		}

		public function auth_admin()
		{
			if (isset($_POST["admin_login"]))
			{
				getRows($this->query, $this->params);
			}
		}
	}


	$admin = new Admin();
	$admin->auth_admin();


