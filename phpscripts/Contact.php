<?php
	include("Database.php");

	Class Contact extends Database
	{
		public $sender_name, $sender_email, $msg_body, $msg_cat;

		public function getFormValues()
		{
			if(isset($_POST["msg_submit"]))
			{
				$this->sender_name	 = $_POST["sender_name"];
				$this->sender_email	 = $_POST["sender_email"];
				$this->msg_cat 		 = $_POST["msg_cat"];
				$this->msg_body 	 = $_POST["msg_body"];
			}

			return $this;
		}
	}

	$the_msg = new Contact();
	$the_msg->getFormValues()->insertRow("INSERT INTO `messages` (msg_sender, msg_sender_email, msg_cat, msg_body) VALUES (?, ?, ?, ?)", [$the_msg->sender_name, $the_msg->sender_email, $the_msg->msg_cat, $the_msg
		->msg_body]);







