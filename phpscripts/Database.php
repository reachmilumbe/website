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

		// Insert row into the table
		public function insertRow($query, $params = [])
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

		// Fetch a single row from the database
		public function getRow($query, $params = [])
		{
			try
			{
				$stmt = $this->dsn->prepare($query);
				$stmt->execute($params);
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			catch (Exception $e)
			{
				throw new Exception($e->getMessage());
			}
		}

		// Fetch multiple rows from table
		public function getRows($query, $params = [])
		{
			try
			{
				$stmt = $this->dsn->prepare($query);
				$stmt->execute($params);
				return $stmt->fetchAll(PDO::FETCH_ASSOC);

			}
			catch (Exception $e)
			{
				throw new Exception($e->getMessage());
			}
		}

		// Delete row from table
		public function deleteRow($query, $params = [])
		{
			try
			{
				$stmt = $this->dsn->prepare($query);
				$stmt->execute($params);
				return TRUE;

			}
			catch (Exception $e)
			{
				throw new Exception($e->getMessage());
			}
		}

		public function sayHello($name)
		{
			echo "Hello: {$name}";
		}
	}

	