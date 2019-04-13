<?php $pageTitle = "Log In | Admin"; ?>
<?php include("../includes/head.php"); ?>

<div class="admin_wrapper">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-6">
				<form name="admin_login_form" method="POST" action="admin_login.php">
					<div class="form-group">
						<input type="email" class="form-control" id="" name="admin_email" placeholder="Admin Email">
						<small><p id="name_disp" class="text-danger"></p></small>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="" name="admin_password" aria-describedby="emailHelp" placeholder="Admin Password">
						<small><p id="email_disp" class="text-danger"></p></small>
					</div>				
					<button type="submit" name="admin_login" class="btn btn-primary btn-block lightseagreen-btn">LOG IN</button>
				</form>			
			</div>
		</div>
	</div>
</div>

<?php include("../includes/footer.php"); ?>




						
					