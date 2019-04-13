<?php $pageTitle = "Messages | Admin"; ?>
<?php include("../../includes/head.php"); ?>
<?php include("../../phpscripts/Database.php"); ?>

<?php	
	$msg = new Database();
	$query = "SELECT * FROM `messages` ORDER BY `msg_sent_date` DESC";
	$messages = $msg->getRows($query, []);
?>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-8">
			<!-- crEATE SOME MESSAGE STATICS TO DISPLAY TOTAL MESSAGES AND TOTAL READ MESSAGES -->
		</div>
		
		<div class="col-md-8">
			<?php
				foreach($messages as $msg_data)
				{
			?>
				<div class="messageBox mt-3 p-2">
					<div class="messageHead pl-2">
						<p>Message from: <span><strong><?php echo $msg_data["msg_sender"]?></strong></span> | Recieved on: <span><strong><?php echo $msg_data["msg_sent_date"]; ?></strong></span></p>
					</div>
					<div class="messageBody p-2">
						<h6><em>Category: </em><strong><?php echo $msg_data["msg_cat"];?></strong></h6>
						<p> <?php echo $msg_data["msg_body"]; ?></p>
					</div>
					<div class="messageActions mt-2">
						<a href="" class="btn">Read</a> | <a href="" class="btn">Reply</a> | <a href='<?php echo "msgDelete.php?id={$msg_data['msg_id']}"?>' class="btn">Delete</a> 
					</div>
				</div>
			<?php
				}
			?>

		</div>	
	</div>
</div>

<?php include("../../includes/footer.php"); ?>
