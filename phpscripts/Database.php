<?php
	class Database
	{
		// Set Database credential
		private $db_hostname = "localhost";
		private $db_username = "root";
		private $db_password = "";
		private $db_name = "reachmilumbe";

		// Set the DSN
		protected $dsn;
		// Establish Connection to the Database using PDO
		public function __construct()
		{
			try
			{
				$this->dsn = new PDO("mysql:host={$this->db_hostname}; dbname={$this->db_name}", $this->db_username, $this->db_password);
				$this->dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// echo "Demo";
			}
			catch (PDOException $e)
			{
				throw new Exception($e->getMessage());
			}
		}

		public function sendMessage($query, $params=[])
		{
			try
			{
				$stmt = $this->dsn->prepare($query);
				$stmt->execute($params);
				echo "Message Sent. Thank You!";
				return TRUE;
			}
			catch (PDOException $e)
			{
				throw new Exception($e->getMessage());
			}
		}

	}

	