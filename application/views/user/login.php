<br><br>
<form action="<?=base_url()?>in/login_process" method="post">
<div class="container" id="logincontainer">
	<div class="row justify-content-center">
		<div class="col-md-7">
			<div class="shadow border p-3">
				<h4>User Login</h4>
				<br>
				<span>Enter Mobile / Email</span>
				<input type="text" name="email_mobile" class="form-control">
				<br><br>

				<span>Enter Password</span>
				<input type="password" name="password" class="form-control">
				<br><br>

				<div class="col-md-12 text-center">
					<button class="btn btn-dark">Login Now</button>
				</div>
				<br>
				<br>
				<div onclick="toggleForm()" class="text-center">
					New User, Create Account
				</div>
			</div>
		</div>
	</div>
</div>
</form>


<form action="<?=base_url()?>in/register_user" method="post">
<div class="container" id="registercontainer" style="display:none;">
	<div class="row justify-content-center">
		<div class="col-md-7">
			<div class="shadow border p-3">
				<h4>User Registration</h4>
				<br>
				<span>Enter name</span>
				<input type="text" name="username" class="form-control">
				<br><br>
				<span>Enter Mobile</span>
				<input type="number" name="usermobile" class="form-control">
				<br><br>
				<span>Enter Email</span>
				<input type="email" name="useremail" class="form-control">
				<br><br>
				<span>Enter Password</span>
				<input type="password" name="password" class="form-control">
				<br><br>

				<div class="col-md-12 text-center">
					<button class="btn btn-dark">Register Now</button>
				</div>
				<br>
				<br>
				<div onclick="toggleForm()" class="text-center">
					Already User, Login Now
				</div>
			</div>
		</div>
	</div>
</div>
</form>
<br>
<br>
<script type="text/javascript">
	function toggleForm()
	 {
		$("#logincontainer").toggle();
		$("#registercontainer").toggle();
	}
</script>